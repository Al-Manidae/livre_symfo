<?php

namespace App\Controller\Admin;

use App\Entity\Livres;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LivresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livres::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            yield TextField::new('nom'),
            yield AssociationField::new('auteur')->renderAsNativeWidget(),
            yield AssociationField::new('editeur')->renderAsNativeWidget(),
            yield ImageField::new('image')->setBasePath('uploads/images/')
            ->setUploadDir('public/uploads/images/'),
        ];
    }
    
}
