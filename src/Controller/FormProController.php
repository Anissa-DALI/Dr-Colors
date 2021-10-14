<?php

namespace App\Controller;

use App\Entity\Professionnels;
use App\Entity\Comment;
use App\Controller\SluggerInterface;
use App\Controller\FileException;
use App\Controller\Download;
use App\Entity\Image;
use App\Form\FormProType;
use App\Form\CommentFormType;
use ContainerAYRoeVT\getVichUploader_Form_Type_ImageService;
use ContainerE4ZmX7x\getForm_Type_FormService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Config\VichUploaderConfig;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Flex\Downloader;

class FormProController extends AbstractController
    {
        #[Route('/form/pro', name: 'form_pro')]

        public function index(Request $request, EntityManagerInterface $entityManager): Response
        {
            $professionnels = new Professionnels ('null');

            $form = $this -> createForm(FormProType::class, $professionnels);
            
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($professionnels);
            $entityManager->flush();

            $this->addFlash('success', 'Votre demande a été envoyé.');

            }

            
            return $this->render('form_pro/index.html.twig', [ 
                'form' => $form->createView(),
                ]);  
            }
    }
        
    
    