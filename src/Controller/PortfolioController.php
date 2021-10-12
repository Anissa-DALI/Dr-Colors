<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/peintures-intérieures', name: 'portfolio-intern_paint')]
    public function index(): Response
    {
        return $this->render('portfolio/intern-paint.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
