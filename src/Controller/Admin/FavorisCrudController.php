<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

use App\Entity\Favoris;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class FavorisCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Favoris::class;
    }
public function configureActions(Actions $actions): Actions
{
    return $actions
    ->remove(Crud::PAGE_INDEX, Action::NEW)
    ->remove(Crud::PAGE_INDEX, Action::EDIT)
    ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
        return $action->setLabel('Retirer des favoris');
    })

    //->remove(Crud::PAGE_DETAIL, Action::EDIT)   
    ;
}

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('nomOeuvre')->setLabel('Titre'),
            TextField::new('type')->setLabel('Type'),
            ImageField::new('adresseImageCouvertureFilm')->setUploadDir("/public/assets/film/images")
            -> setBasePath("/assets/film/images")->setLabel('Affiche'),
            TextEditorField::new('resumeFilm')->setLabel('Synopsis'),

        ];
    }
    
}
