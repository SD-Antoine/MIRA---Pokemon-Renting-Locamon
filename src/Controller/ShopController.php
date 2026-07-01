<?php

namespace App\Controller;

use App\Entity\Locamon;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface as KnpPaginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ShopController extends AbstractController
{
    /**
     * Page d'accueil : la boutique répond à la fois sur "/" et "/shop".
     */
    #[Route('/', name: 'home')]
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
            'search' => $search,
        ]);
    }

    #[Route('/shop/{id}', name: 'shop.show', requirements: ['id' => '\d+'])]
    public function show(Locamon $locamon, Request $request): Response
    {
        // Petit message si l'utilisateur revient d'un paiement annulé.
        if ($request->query->getBoolean('canceled')) {
            $this->addFlash('error', 'Paiement annulé. Aucune somme n\'a été débitée.');
        }

        return $this->render('shop/show.html.twig', [
            'locamon' => $locamon,
        ]);
    }

    #[Route('/shop/{id}/checkout', name: 'shop.checkout', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function checkout(Locamon $locamon, Request $request): Response
    {
        // Validation du nombre de jours (borné pour éviter des totaux absurdes).
        $days = (int) $request->request->get('days', 1);
        $days = max(1, min($days, 365));

        // Protection CSRF (le nom du token contient l'id du locamon).
        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('checkout' . $locamon->getId(), $token)) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Vérification du stock le cas échéant.
        $stock = $locamon->getStock();
        if ($stock !== null && $stock <= 0) {
            $this->addFlash('error', 'Ce Locamon est en rupture de stock.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        $secret = $this->getStripeSecret();
        if (!$secret) {
            $this->addFlash('error', 'La clé secrète Stripe n\'est pas configurée.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        \Stripe\Stripe::setApiKey($secret);

        // Montant unitaire en centimes : source unique de vérité dans l'entité Locamon.
        $unitAmount = $locamon->getPriceInCents();
        if ($unitAmount <= 0) {
            $this->addFlash('error', 'Prix invalide pour ce Locamon.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Stripe limite le montant total à 99 999 999 centimes (≈ 999 999,99 €).
        if ($unitAmount * $days > 99999999) {
            $this->addFlash('error', 'Le montant total est trop élevé pour Stripe. Réduisez le nombre de jours ou le prix.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'mode' => 'payment',
                // Les metadata sont posées sur la SESSION (et non sur product_data) :
                // c'est ce qu'on relit de façon fiable au retour et dans le webhook.
                'metadata' => [
                    'locamon_id' => (string) $locamon->getId(),
                    'days' => (string) $days,
                ],
                'client_reference_id' => (string) $locamon->getId(),
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => ($locamon->getNickname() ? $locamon->getNickname() . ' - ' : '')
                                . $locamon->getPokemon()->getTranslations()->first()?->getName(),
                        ],
                        'unit_amount' => $unitAmount,
                    ],
                    'quantity' => $days,
                ]],
                // {CHECKOUT_SESSION_ID} est remplacé par Stripe ; on le relit dans success().
                'success_url' => $this->generateUrl('shop.success', ['id' => $locamon->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
                    . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $this->generateUrl('shop.show', ['id' => $locamon->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
                    . '?canceled=1',
            ]);

            return $this->redirect($session->url);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur Stripe : ' . $e->getMessage());
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }
    }

    /**
     * Retour de Stripe après un paiement réussi.
     *
     * C'est ICI que la commande est finalisée en développement local : Stripe ne
     * pouvant pas joindre 127.0.0.1, on ne peut pas compter sur le webhook. On
     * récupère la session, on vérifie qu'elle est bien payée, puis on décrémente
     * le stock une seule fois (garde anti double-comptage via la session HTTP).
     */
    #[Route('/shop/{id}/success', name: 'shop.success', requirements: ['id' => '\d+'])]
    public function success(Locamon $locamon, Request $request, EntityManagerInterface $em): Response
    {
        $sessionId = $request->query->get('session_id');
        $secret = $this->getStripeSecret();

        if (!$sessionId || !$secret) {
            $this->addFlash('error', 'Session de paiement introuvable.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        \Stripe\Stripe::setApiKey($secret);

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de vérifier le paiement : ' . $e->getMessage());
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        if (($session->payment_status ?? null) !== 'paid') {
            $this->addFlash('error', 'Le paiement n\'a pas été confirmé.');
            return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
        }

        // Garde d'idempotence : on ne traite chaque session de paiement qu'une fois
        // (évite un double décompte si l'utilisateur recharge la page de succès).
        $httpSession = $request->getSession();
        $processed = $httpSession->get('stripe_processed_sessions', []);

        if (!in_array($sessionId, $processed, true)) {
            $this->fulfillOrder($session, $em);

            $processed[] = $sessionId;
            $httpSession->set('stripe_processed_sessions', $processed);

            $this->addFlash('success', 'Paiement réussi ! Ta location est confirmée. 🎉');
        }

        return $this->redirectToRoute('shop.show', ['id' => $locamon->getId()]);
    }

    /**
     * Webhook Stripe — voie de finalisation recommandée en PRODUCTION.
     *
     * En local il ne se déclenche pas (Stripe ne joint pas 127.0.0.1) sauf si on
     * lance le Stripe CLI :
     *   stripe listen --forward-to 127.0.0.1:8000/shop/webhook/stripe
     *
     * Pour éviter un double décompte avec success(), n'activez la finalisation
     * QUE d'un côté : si vous déployez avec un vrai webhook joignable, déplacez la
     * logique de fulfillOrder() ici et retirez-la de success().
     */
    #[Route('/shop/webhook/stripe', name: 'shop.webhook_stripe', methods: ['POST'])]
    public function webhookStripe(Request $request, EntityManagerInterface $em): Response
    {
        $secret = $this->getStripeSecret();
        $endpointSecret = $_ENV['STRIPE_WEBHOOK_SECRET'] ?? ($_SERVER['STRIPE_WEBHOOK_SECRET'] ?? null);

        if (!$secret || !$endpointSecret) {
            return new Response('Stripe not configured', 500);
        }

        \Stripe\Stripe::setApiKey($secret);

        try {
            $event = \Stripe\Webhook::constructEvent(
                $request->getContent(),
                $request->headers->get('stripe-signature'),
                $endpointSecret
            );
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return new Response('Invalid signature', 400);
        } catch (\Exception $e) {
            return new Response('Webhook error: ' . $e->getMessage(), 400);
        }

        if ($event->type === 'checkout.session.completed') {
            // En local, success() a déjà finalisé. En production, décommentez :
            // $this->fulfillOrder($event->data->object, $em);
        }

        return new Response('ok', 200);
    }

    /**
     * Décrémente le stock du Locamon concerné par une session payée.
     * Lit l'id du Locamon dans les metadata de la SESSION (posées au checkout).
     */
    private function fulfillOrder(object $session, EntityManagerInterface $em): void
    {
        $locamonId = $session->metadata->locamon_id ?? ($session->client_reference_id ?? null);

        if (!$locamonId) {
            return;
        }

        $locamon = $em->getRepository(Locamon::class)->find((int) $locamonId);

        // Stock null = illimité : rien à décrémenter.
        if ($locamon && $locamon->getStock() !== null && $locamon->getStock() > 0) {
            $locamon->setStock($locamon->getStock() - 1);
            $em->flush();
        }
    }

    private function getStripeSecret(): ?string
    {
        return $_ENV['STRIPE_SECRET'] ?? ($_SERVER['STRIPE_SECRET'] ?? null);
    }
}
