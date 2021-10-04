<?php

namespace App\Controller;
use app\Entity\Fans;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager as PersistenceObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/homepage.html.twig', [
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
    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('home/nos-services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/portefolio', name: 'portefolio')]
    public function portefolio(): Response
    {
        return $this->render('home/portefolio.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function forms() :response
 {   
     
             $form = $this ->createForm(ContactFormType::class );
             
          return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
            'form'=>$form->createView()
        ]);
    }
    
    #[Route('/aboutus', name: 'aboutus')]
    public function aboutus(): Response
    {
        return $this->render('home/a-propos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
