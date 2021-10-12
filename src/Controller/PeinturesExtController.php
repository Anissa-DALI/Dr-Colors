<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeinturesExtController extends AbstractController
{
    #[Route('/peintures-extérieures', name: 'peintures_ext')]
    public function index(): Response
    {
        return $this->render('portfolio/out-paint.html.twig', [
            'controller_name' => 'PeinturesExtController',
        ]);
    }
}
