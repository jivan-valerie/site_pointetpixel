<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

// use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PagesController extends AbstractController


{
    /**
     * @Route("/artgraphique", name="graphique")
     */
    public function showgraf(): Response
    {
        return $this->render('pages/graphique.html.twig');
    }
}
