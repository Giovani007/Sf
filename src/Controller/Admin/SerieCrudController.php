<?php

namespace App\Controller\Admin;

use App\Entity\Serie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;


use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;




class SerieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Serie::class;
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nomSerie')
            ->add('genre')
            ->add('notePresseSerie')
            ->add('dateserie')
        ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [

            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('nomSerie')->setLabel('Série'),
            TextEditorField::new('resumeSerie')->setLabel('Synopsis'),
            ImageField::new('adresseImageCouvertureSerie')->setUploadDir("/public/assets/serie/images")
                                                        -> setBasePath("/assets/serie/images"),
            TextField::new('genre')->setLabel('Genre'),
            TextField::new('realisateurSerie')->setLabel('Réalisateur'),
            IntegerField::new('notePresseSerie')->setLabel('Note de presse'),
            DateField::new('dateserie')->setLabel('Date Sorti'),
            BooleanField::new('sommeilSerie')->setLabel('favoris'),

        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
            return $action->setLabel('Supprimer');
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
            return $action->setLabel('Modifier');
        })
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
            return $action->setLabel('Nouvelle Serie');
        })
    
        ;
    }
    
}
