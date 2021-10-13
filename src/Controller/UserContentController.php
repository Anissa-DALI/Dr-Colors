<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Particulier;
use App\Entity\Professionnels;

class UserContentController extends AbstractController
{
    #[Route('/user/content', name: 'user_content')]
    public function index()
    {

      $userPar = $this->getDoctrine()->getRepository(Particulier::class)->findAll(array('id' => 0));

      $userPro = $this->getDoctrine()->getRepository(Professionnels::class)->findAll(array('id' => 0));

        return $this->render('user_content/index.html.twig', [
            'userPar' => $userPar,
            'userPro' => $userPro,
        ]);
    }



}
