<?php

namespace App\Controller;

use App\Entity\Locamon;
use App\Form\LocamonType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface as KnpPaginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
class LocamonController extends AbstractController
{
    #[Route('/locamon', name: 'locamon.index')]
    public function index(Request $request, EntityManagerInterface $em, KnpPaginator $paginator): Response
    {
        $qb = $em->getRepository(Locamon::class)->createQueryBuilder('l')->orderBy('l.id', 'ASC');

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('locamon/index.html.twig', ['locamons' => $pagination]);
    }

    #[Route('/locamon/new', name: 'locamon.create')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $locamon = new Locamon();
        $form = $this->createForm(LocamonType::class, $locamon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($locamon);
            $em->flush();

            return $this->redirectToRoute('locamon.index');
        }

        return $this->render('locamon/new.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/locamon/{id}/show', name: 'locamon.show')]
    public function show(Locamon $locamon): Response
    {
        return $this->render('locamon/show.html.twig', ['locamon' => $locamon]);
    }

    #[Route('/locamon/{id}/edit', name: 'locamon.edit')]
    public function edit(Request $request, Locamon $locamon, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(LocamonType::class, $locamon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('locamon.index');
        }

        return $this->render('locamon/edit.html.twig', ['form' => $form->createView(), 'locamon' => $locamon]);
    }

    #[Route('/locamon/manage/{id}/delete', name: 'locamon.delete', methods: ['POST'])]
    public function delete(Request $request, Locamon $locamon, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$locamon->getId(), $request->request->get('_token'))) {
            $em->remove($locamon);
            $em->flush();
        }

        return $this->redirectToRoute('locamon.index');
    }
}
