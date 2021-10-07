<?php
namespace App\Controller;
use App\Entity\Particulier;
use App\Form\ParticulierType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/form', name: 'form')]
    public function index(Request $request): Response

    {   $particulier = new Particulier();
        dump($particulier);
         $form = $this->createForm(ParticulierType::class,$particulier);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
              

            // Insérer en BDD... Persister un objet avec Doctrine
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($particulier); // Mets de côté l'objet
            $manager->flush(); // INSERT

            // Redirection vers la page de contact
            $this->addFlash('success', 'Votre message a été envoyé.');

            return $this->redirectToRoute('home');
        }
                return $this->render('form/particulier.html.twig', [
            'controller_name' => 'FormController',
           'form'=>$form->createview()
        ]);
    }

    
    
}
