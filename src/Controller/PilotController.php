<?php

namespace App\Controller;

use App\Entity\Pilot;
use App\Form\PilotType;
use App\Repository\PilotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pilot")
 */
class PilotController extends AbstractController
{
    /**
     * @Route("/", name="pilot_index", methods={"GET"})
     */
    public function index(PilotRepository $pilotRepository): Response
    {
        return $this->render('pilot/index.html.twig', [
            'pilots' => $pilotRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pilot_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pilot = new Pilot();
        $form = $this->createForm(PilotType::class, $pilot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pilot);
            $entityManager->flush();

            return $this->redirectToRoute('pilot_index');
        }

        return $this->render('pilot/new.html.twig', [
            'pilot' => $pilot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pilot_show", methods={"GET"})
     */
    public function show(Pilot $pilot): Response
    {
        return $this->render('pilot/show.html.twig', [
            'pilot' => $pilot,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pilot_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pilot $pilot): Response
    {
        $form = $this->createForm(PilotType::class, $pilot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pilot_index');
        }

        return $this->render('pilot/edit.html.twig', [
            'pilot' => $pilot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pilot_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pilot $pilot): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pilot->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pilot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pilot_index');
    }
}
