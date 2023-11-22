<?php

namespace App\Controller\Admin;

use App\Entity\Vinyl;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

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
            SlugField::new('slug')->setTargetFieldName('title'),
            AssociationField::new('artist'),
            TextEditorField::new('content'),
            TextField::new('attachmentFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('attachment')->setBasePath('/uploads/attachments')->onlyOnIndex(),

            //ImageField::new('attachment')->setBasePath('uploads/attachments')->onlyOnIndex()/*->setUploadDir('/assets')*/,
            MoneyField::new('price')->setCurrency('EUR'),
            DateField::new('createdAt'),
            DateField::new('updatedAt')


            //TextField::new('attachmentFile')->setFormType(VichImageType::class)->onlyWhenCreating()



            //TextField::new('attachment')->setFormType(VichImageType::class)->onlyWhenCreating(),
        //ImageField::new('imageName')->setBasePath('/asset/img/gallery')->onylOnIndex()

        ];
    }

}
