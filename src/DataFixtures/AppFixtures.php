<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use App\Entity\Livres;
use App\Entity\Editeur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//         // ajout de 20 auteurs
//         for ($j = 0; $j < 20; $j++) {
//             $auteur = new Auteur();
//             $auteur->setNom("auteur".$j);
//             $auteurs[]= $auteur;
//             $manager->persist($auteur);
//         }

//         // ajout de 5 editeurs
//         for ($k = 0; $k < 5; $k++) {
//             $editeur = new Editeur();
//             $editeur->setNom("editeur".$k);

//             $manager->persist($editeur);
//         }

//         // ajout de 30 livres
//         for ($i = 0; $i < 30; $i++) {
//             $livres = new Livres();
//             $livres->setNom("livre".$i);
//             for ($l = 0; $l < mt_rand(5,15); $l++) {
//                 $livres ->addAuteur($auteurs[mt_rand(0, count($auteurs) -1)]);
//             }
//             $manager->persist($livres);
//         }

//         $manager->flush();
    }
}

?>