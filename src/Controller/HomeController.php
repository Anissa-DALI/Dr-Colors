<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/accueil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
        
    }
    
    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('home/nos-services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
        
    }  

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/a-propos-drcolors.html.twig', [
            'controller_name' => 'HomeController',
        ]);
        
    }  
    #[Route('/legal', name: 'legal')]
    public function legal(): Response
    {
        return $this->render('home/mentions-legales.html.twig', [
            'controller_name' => 'HomeController',
        ]);
        
    }  
}
