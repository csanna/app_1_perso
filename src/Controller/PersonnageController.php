<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="personnage")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/persos", name="persos")
     */
    public function persos()
    {
        return $this->render('personnage/persos.html.twig', [
            "pseudo" => "PNL",
            "age" => 25,
            "carac" => [
                "force" => 3,
                "agilité" => 2,
                "intelligence" => 3
            ]
        ]);
    }
}
