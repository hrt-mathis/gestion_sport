<?php

namespace App\Controller;

use App\Entity\Stable;
use App\Form\StableType;
use App\Repository\StableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/stable")
 */
class StableController extends AbstractController
{
    /**
     * @Route("/", name="stable_index", methods={"GET"})
     */
    public function index(StableRepository $stableRepository): Response
    {
        return $this->render('stable/index.html.twig', [
            'stables' => $stableRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="stable_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $stable = new Stable();
        $form = $this->createForm(StableType::class, $stable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stable);
            $entityManager->flush();

            return $this->redirectToRoute('stable_index');
        }

        return $this->render('stable/new.html.twig', [
            'stable' => $stable,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stable_show", methods={"GET"})
     */
    public function show(Stable $stable): Response
    {
        return $this->render('stable/show.html.twig', [
            'stable' => $stable,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="stable_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Stable $stable): Response
    {
        $form = $this->createForm(StableType::class, $stable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stable_index');
        }

        return $this->render('stable/edit.html.twig', [
            'stable' => $stable,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="stable_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Stable $stable): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stable->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($stable);
            $entityManager->flush();
        }

        return $this->redirectToRoute('stable_index');
    }
}
