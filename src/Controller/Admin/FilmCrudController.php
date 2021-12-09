<?php

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use App\Entity\Film;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use App\Repository\FilmRepository;

use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

//use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;


class FilmCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Film::class;
    }

    /**
     * @Route("/sommeilFilm/{id}", name="activer")
     */
    public function sommeilFilm(Film $film)
    {
        $film->setSommeilFilm(($film->getSommeilFilm())?false:true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($film);
        $em->flush();

        return new Response("true");
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nomFilm')
            ->add('genre')
            ->add('notePresseFilm')
            ->add('datefilm')

        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new( 'nomFilm')->setLabel('Film'),
            TextEditorField::new('resumeFilm')->setLabel('Synopsis'),
            ImageField::new('adresseImageCouvertureFilm')->setUploadDir("/public/assets/film/images")
                                                        -> setBasePath("/assets/film/images")->setLabel('Affiche'),
            TextField::new('genre')->setLabel('Genre'),
            TextField::new('realisateurFilm')->setLabel('Réalisateur'),
            IntegerField::new('notePresseFilm')->setLabel('Note de presse'),
            DateField::new('datefilm')->setLabel('Date de Sorti'),
            UrlField::new('lienFilm')->setLabel('Voir le film'),

            BooleanField::new('sommeilFilm')->setLabel('Favoris'),

            
            

        ];
        
    }
    public function configureActions(Actions $actions): Actions
    {
        //$viewInvoice = Action::new('viewInvoice', 'Invoice', 'fa fa-file-invoice');

        return $actions
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
            return $action->setLabel('Supprimer');
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
            return $action->setLabel('Modifier');
        })
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
            return $action->setLabel('Nouveau Film');
        })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $action) {
            return $action->setLabel('Créer et ajouter un autre Film');
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $action) {
            return $action->setLabel('Sauvegarder les changements');
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
            return $action->setLabel('Sauvegarder et continuer à modifier');
        })
        ;
    }

    // public function insertFavoris(FavorisRepository $favorisrepository){
    //     //$qb = new QueryBuilder($this->getDoctrine()->getManager());
    //     //$qb->select('u')->from('User','u')->where('u.roles = ?ROLE_USER');
    // }
    
}
