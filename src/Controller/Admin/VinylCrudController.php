<?php

namespace App\Controller\Admin;

use App\Entity\Vinyl;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VinylCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vinyl::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            idField::new('id'),
            TextEditorField::new('content'),
            TextField::new('attachment'),
            MoneyField::new('price')->setCurrency('EUR'),
            DateField::new('createdAt'),
            DateField::new('updatedAt')
            //SlugField::new('Slug')->setTargetFieldName('name'),
            //CollectionField::new('artist')
            //AssociationField::new('Artist')

        ];
    }

}
