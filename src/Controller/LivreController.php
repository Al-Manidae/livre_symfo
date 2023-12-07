<?php

namespace App\Controller;

use App\Repository\LivresRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivreController extends AbstractController
{
    #[Route('/livre', name: 'app_livre')]
    public function index(LivresRepository $livresRepository): Response
    {
        $livres = $livresRepository->findAll();
        return $this->render('livre/index.html.twig', [
            'livres' => $livres,
        ]);
    }
}
