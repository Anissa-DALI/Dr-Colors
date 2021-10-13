<?php
namespace App\Controller;
use App\Entity\Personne;
use App\Form\PersonneType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Comment;
use App\Controller\SluggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
    #[Route('/apropos', name: 'apropos')]
    public function apropos(): Response
    {
        return $this->render('a_propos/A-propos.html.twig', [
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
    #[Route('/cgv', name: 'cgv')]
    public function cgv(): Response
    {
        return $this->render('home/cgv.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/particulier', name: 'particulier')]
    public function particulier(Request $request,) :response
 {
    $personne = new Personne();
        dump($personne);
    $form = $this ->createForm(PersonneType::class,$personne  );
       //Récupération des entrées
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {

        // Insérer en BDD..
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($personne); // réserve l'objet
        $manager->flush(); // INSERT
                    // Redirection vers page home
                    $this->addFlash('success', 'Votre message a été envoyé.');

                    return $this->redirectToRoute('particulier');
                }

          return $this->render('home/contact-particulier.html.twig', [
            'controller_name' => 'HomeController',

            'form'=>$form->createView()
        ]);
    }

}
