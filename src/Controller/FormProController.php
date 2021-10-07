<?php

namespace App\Controller;

use App\Entity\Professionnels;
use App\Form\FormProType;
use ContainerE4ZmX7x\getForm_Type_FormService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



    class FormProController extends AbstractController
    {
        #[Route('/form/pro', name: 'form_pro')]

        public function index(Request $request, EntityManagerInterface $entityManager): Response
        {
            $professionnels = new Professionnels ();

            $form = $this -> createForm(FormProType::class, $professionnels);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($professionnels);
            $entityManager->flush();
    }

            return $this->render('form_pro/index.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }


// class FormProController extends AbstractType 
// {
//     #[Route('/form/pro', name: 'form_pro')]
    
//     public function buildForm(FormBuilderInterface $builder, array $options)
//     {
//         $builder
//             -> add('societe_name') 
//             -> add('adresse')
//             -> add('code_postal') 
//             -> add('ville') 
//             -> add('accessibilite') 
//             -> add('etat_mur') 
//             -> add('superficie') 
//             -> add('hauteur_max') 
//             -> add('telecharger_photo');   
//     }

//     public function configureOptions(OptionsResolver $resolver)
//     {
//         $resolver->setDefaults([
//             'data_class' => FormPro::class,
//         ]);   
//     }
// }
