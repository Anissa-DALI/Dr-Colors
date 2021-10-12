<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OeuvresOriginalesController extends AbstractController
{
    #[Route('/oeuvres-originales', name: 'oeuvres_originales')]
    public function index(): Response
    {
        return $this->render('portfolio/original-work.html.twig', [
            'controller_name' => 'OeuvresOriginalesController',
        ]);
    }
}
