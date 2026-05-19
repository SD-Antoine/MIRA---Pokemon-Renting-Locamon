<?php

namespace App\Controller;

use App\Entity\Locamon;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface as KnpPaginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop.index')]
    public function index(Request $request, EntityManagerInterface $em, KnpPaginator $paginator): Response
    {
        $search = $request->query->get('search', '');
        $qb = $em->getRepository(Locamon::class)->createQueryBuilder('l')
            ->leftJoin('l.pokemon', 'p')
            ->leftJoin('p.translations', 'pt', 'WITH', 'pt.lang = :lang')
            ->setParameter('lang', 'fr')
            ->orderBy('l.id', 'ASC');

        // Filter by nickname or pokemon name (French)
        if (!empty($search)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('l.nickname', ':search'),
                    $qb->expr()->like('pt.name', ':search')
                )
            )
            ->setParameter('search', '%' . $search . '%');
        }

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            12
        );

        return $this->render('shop/index.html.twig', [
            'locamons' => $pagination,
            'search' => $search
        ]);
    }

    #[Route('/shop/{id}', name: 'shop.show')]
    public function show(Locamon $locamon): Response
    {
        return $this->render('shop/show.html.twig', [
            'locamon' => $locamon
        ]);
    }

    #[Route('/shop/{id}/checkout', name: 'shop.checkout', methods: ['POST'])]
    public function checkout(Locamon $locamon, Request $request): Response
    {
        // Basic validation of days (cap to avoid huge totals)
        $days = (int) $request->request->get('days', 1);
        if ($days < 1) {
            $days = 1;
        }
        // Cap reservation days to a sensible maximum (1 year)
        $days = min($days, 365);

        // CSRF protection (token name uses locamon id)
        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('checkout' . $locamon->getId(), $token)) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Check stock if applicable
        $stock = $locamon->getStock();
        if ($stock !== null && $stock <= 0) {
            $this->addFlash('error', 'This item is out of stock.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Prepare Stripe
        $secret = $_ENV['STRIPE_SECRET'] ?? ($_SERVER['STRIPE_SECRET'] ?? null);
        if (!$secret) {
            $this->addFlash('error', 'Stripe secret key not configured.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        \Stripe\Stripe::setApiKey($secret);

        // Stripe expects an integer amount in the smallest currency unit (cents)
        // Detect whether the stored price is already in cents or in euros.
        $storedPrice = $locamon->getPrice() ?? 0;
        if ($storedPrice <= 0) {
            $this->addFlash('error', 'Invalid price for this item.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Heuristic: if the stored price is very large (> 10000) we assume it's already in cents.
        if ($storedPrice > 10000) {
            $unitAmount = (int) $storedPrice;
        } else {
            // Otherwise treat it as euros and convert to cents
            $unitAmount = (int) round($storedPrice * 100);
        }

        // Ensure total won't exceed Stripe limit (99,999,999 cents -> €999,999.99)
        $total = $unitAmount * $days;
        if ($total > 99999999) {
            $this->addFlash('error', 'Le montant total est trop élevé pour Stripe. Réduisez le nombre de jours ou le prix.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'mode' => 'payment',
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => ($locamon->getNickname() ? $locamon->getNickname() . ' - ' : '') . $locamon->getPokemon()->getTranslations()->first()?->getName(),
                            'metadata' => [
                                'locamon_id' => $locamon->getId(),
                                'days' => $days,
                            ],
                        ],
                        'unit_amount' => $unitAmount,
                    ],
                    'quantity' => $days,
                ]],
                'success_url' => $this->generateUrl('shop.show', ['id' => $locamon->getId()], 
                    \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL) . '?paid=1',
                'cancel_url' => $this->generateUrl('shop.show', ['id' => $locamon->getId()], 
                    \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL) . '?canceled=1',
            ]);

            return $this->redirect($session->url);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Stripe error: ' . $e->getMessage());
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }
    }

// #[Route('/shop/webhook/stripe', name: 'shop.webhook_stripe', methods: ['POST'])]
// public function webhookStripe(Request $request, EntityManagerInterface $em): Response
// {
//     $payload = $request->getContent();
//     $sig_header = $request->headers->get('stripe-signature');
//     $endpoint_secret = $_ENV['STRIPE_WEBHOOK_SECRET'];

//     try {
//         $event = \Stripe\Webhook::constructEvent(
//             $payload,
//             $sig_header,
//             $endpoint_secret
//         );
//     } catch (\Stripe\Exception\SignatureVerificationException $e) {
//         return new Response('Invalid signature', 400);
//     } catch (\Exception $e) {
//         return new Response('Webhook error: ' . $e->getMessage(), 400);
//     }

//     if ($event->type === 'checkout.session.completed') {
//         /** @var \Stripe\Checkout\Session $session */
//         $session = $event->data->object;

//         // Récupérer line_items de la session
//         $lineItems = \Stripe\Checkout\Session::allLineItems($session->id);

//         foreach ($lineItems->data as $item) {

//             // On récupère l'ID Locamon stocké dans metadata du produit
//             $locamonId = $item->metadata->locamon_id ?? null;

//             if ($locamonId) {
//                 $locamon = $em->getRepository(Locamon::class)->find($locamonId);

//                 if ($locamon) {
//                     if ($locamon->getStock() > 0) {
//                         $locamon->setStock($locamon->getStock() - 1);
//                         $em->flush();
//                     }
//                 }
//             }
//         }
//     }

//     return new Response('ok', 200);
// }
    
    #[Route('/shop/webhook/stripe', name: 'shop.webhook_stripe', methods: ['POST'])]
    public function webhookStripe(Request $request, EntityManagerInterface $em): Response
    {
        \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET']); // <-- essentiel pour allLineItems()

        $payload = $request->getContent();
        $sig_header = $request->headers->get('stripe-signature');
        $endpoint_secret = $_ENV['STRIPE_WEBHOOK_SECRET'];

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return new Response('Invalid signature', 400);
        } catch (\Exception $e) {
            return new Response('Webhook error: ' . $e->getMessage(), 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            // 🔥 LIGNE QUI PLANTAIT AVANT
            $lineItems = \Stripe\Checkout\Session::allLineItems($session->id);

            foreach ($lineItems->data as $item) {
                $locamonId = $item->metadata->locamon_id ?? null;

                if ($locamonId) {
                    $locamon = $em->getRepository(Locamon::class)->findOneBy(['id' => $locamonId]);

                    if ($locamon && $locamon->getStock() > 0) {
                        $locamon->setStock($locamon->getStock() - 1);
                        $em->flush();
                    }
                }
            }
        }

        return new Response('ok', 200);
    }
}
