<?php

namespace App\Controller;

use App\Repository\AuteurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuteurController extends AbstractController
{
    #[Route('/auteur', name: 'app_auteur')]
    public function index(AuteurRepository $auteurRepository): Response
    {
        $auteur = $auteurRepository->findAll();
        return $this->render('auteur/index.html.twig', [
            'auteur' => $auteur,
        ]);
    }
}
