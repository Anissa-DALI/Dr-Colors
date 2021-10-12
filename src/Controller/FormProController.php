<?php

namespace App\Controller;

use App\Entity\Professionnels;
use App\Entity\Comment;
use App\Controller\SluggerInterface;
use App\Controller\FileException;
use App\Form\FormProType;
use App\Form\CommentFormType;
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
            $professionnels = new Professionnels ('null');

            $form = $this -> createForm(FormProType::class, $professionnels);
            
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($professionnels);
            $entityManager->flush();
    }

            return $this->render('form_pro/index.html.twig', [
                'form' => $form->createView(),
            ]);
        ;   

    }

    #[Route('/form/pro/telecharger', name: 'telecharger_photo')]
  
    public function new(Request $request, SluggerInterface $slugger)
    {
        $download = new Download (null);
        $form = $this->createForm(ProductType::class, $download);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $telecharger_photo */

            $download = $form->get('telecharger_photo')->getData();

            if ($telecharger_photo) {
                $originalFilename = pathinfo($telecharger_photo->getClientOriginalName(), PATHINFO_FILENAME);
                
                $safeFilename = $slugger->slug($originalFilename);

                
                // try {
                //     $telecharger_photo->move(
                //         $this->getParameter('download_directory'),
                //     );
                // }
                // catch {

                // };
            
        

        return $this->render('form_pro/index.html.twig', [
            'form' => $form->createView(),

        ]);
    }
}}}