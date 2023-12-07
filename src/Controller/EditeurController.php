<?php

namespace App\Controller;

use App\Repository\EditeurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditeurController extends AbstractController
{
    #[Route('/editeur', name: 'app_editeur')]
    public function index(EditeurRepository $editeurRepository): Response
    {
        $editeur = $editeurRepository->findAll();
        return $this->render('editeur/index.html.twig', [
            'editeur' => $editeur,
        ]);
    }
}
