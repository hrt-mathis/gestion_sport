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
            'Championship/index.html.twig',
            array("championships" => $championships)
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
            'Pilot/index.html.twig',
            array("pilots" => $pilots)
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
            'Stable/index.html.twig',
            array("stables" => $stables)
        );
    }
}
