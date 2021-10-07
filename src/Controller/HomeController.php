<?php

namespace App\Controller;
use app\Entity\Particulier;
use App\Form\FparticulierType;
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
    #[Route('/particulier', name: 'particulier')]
    public function particulier() :response
 {   
     
             $form = $this ->createForm(FParticulierType::class );
             
          return $this->render('home/contact-particulier.html.twig', [
            'controller_name' => 'HomeController',
            'form'=>$form->createView()
        ]);
    }
#Décommenter pour une route pro# 
#    #[Route('/professionnel', name: 'professionnel')]
 #   public function professionnel() :response
 #{   
     
          #   $form = $this ->createForm(ProfessionnelType::class );
             
         # return $this->render('home/contact-professionel.html.twig', [
          #  'controller_name' => 'HomeController',
        #   'form'=>$form->createView()
        #]);
    #}
  #}  
    #[Route('/aboutus', name: 'aboutus')]
    public function aboutus(): Response
    {
        return $this->render('home/a-propos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
