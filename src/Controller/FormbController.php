<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormbController extends AbstractController
{
    #[Route('/formb', name: 'formb')]
    public function index(): Response
    {
        return $this->render('formb/professionnel.html.twig', [
            'controller_name' => 'FormbController',
        ]);
    }
}
