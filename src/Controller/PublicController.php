<?php

namespace App\Controller;

use App\Entity\Championship;
use App\Entity\Pilot;
use App\Entity\Stable;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/")
 */
class PublicController extends AbstractController
{
    /**
     * @Route("/championships", name="championships_index")
     */
    public function showChampionship()
    {
        $repository = $this->getDoctrine()->getRepository(Championship::class);
        $championships = $repository->findAll();

        return $this->render(
            'public/championship.html.twig',
            array("championships" => $championships)
        );
    }

    /**
     * @Route("/championships/view/{id}",name="championship_view")
     */
    public function viewChampionship(Championship $championship)
    {
        return $this->render(
            'public/viewchampionship.html.twig',
            array("championship" => $championship)
        );
    }

    /**
     * @Route("/pilots", name="pilots_index")
     */
    public function showPilot()
    {
        $repository = $this->getDoctrine()->getRepository(Pilot::class);
        $pilots = $repository->findAll();

        return $this->render(
            'public/pilot.html.twig',
            array("pilots" => $pilots)
        );
    }

    /**
     * @Route("/pilots/view/{id}",name="pilot_view")
     */
    public function viewPilot(Pilot $pilot)
    {
        return $this->render(
            'public/viewpilot.html.twig',
            array("pilot" => $pilot)
        );
    }

    /**
     * @Route("/stables", name="stables_index")
     */
    public function showStable()
    {
        $repository = $this->getDoctrine()->getRepository(Stable::class);
        $stables = $repository->findAll();

        return $this->render(
            'public/stable.html.twig',
            array("stables" => $stables)
        );
    }

    /**
     * @Route("/stables/view/{id}",name="stable_view")
     */
    public function viewStable(Stable $stable)
    {
        return $this->render(
            'public/viewstable.html.twig',
            array("stable" => $stable)
        );
    }
}
