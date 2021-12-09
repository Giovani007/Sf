<?php

namespace App\Controller\Admin;

use App\Entity\Film;
use App\Entity\Serie;
use App\Entity\Favoris;
use App\Entity\GenreFilm;
use App\Entity\User;


use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(FilmCrudController::class)->generateUrl());

        //return $this->redirect($routeBuilder->setController(SerieCrudController::class)->generateUrl());
        // $listefilm = $this->getDoctrine()->getRepository(Film::class)->findAll();
        // $em = $this->getdoctrine()->getManager();
        //  return $this->render('base.html.twig', array ['liste film' => $listefilm]);


        
        //return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SF CINE')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('<img src="https://developer.mozilla.org/static/img/favicon144.png"  width=25 height=25> SF <span class="text-small">CINE</span>')

            // the path defined in this method is passed to the Twig asset() function
            ->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            ->setTranslationDomain('my-custom-domain')

            // there's no need to define the "text direction" explicitly because
            // its default value is inferred dynamically from the user locale
            ->setTextDirection('ltr')

            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
            ->renderContentMaximized()

            // set this option if you prefer the sidebar (which contains the main menu)
            // to be displayed as a narrow column instead of the default expanded design
            ->renderSidebarMinimized()

            // by default, all backend URLs include a signature hash. If a user changes any
            // query parameter (to "hack" the backend) the signature won't match and EasyAdmin
            // triggers an error. If this causes any issue in your backend, call this method
            // to disable this feature and remove all URL signature checks
            ->disableUrlSignatures()
        ;
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Home', 'fa fa-home'),

            MenuItem::section('Acceuil'),
                MenuItem::linkToCrud('Films', 'fa fa-film', Film::class),
                MenuItem::linkToCrud('Series', 'fa fa-photo-video', Serie::class),                
                //MenuItem::linkToCrud('Genres', 'fa fa-file-text', Genre::class),
                MenuItem::linkToCrud('Favoris', 'fa fa-bookmark', Favoris::class),
                //MenuItem::linkToCrud('Genre Film', 'fa fa-film', GenreFilm::class),
            
                MenuItem::subMenu('Recherche Avancée', 'fa fa-search')->setSubItems([
                    MenuItem::linkToUrl('Via Google  ', 'fab fa-google', 'https://www.google.com/'),
                    MenuItem::linkToUrl('Via Youtube  ', 'fab fa-youtube', 'https://www.youtube.com/'),
                    MenuItem::linkToUrl('Via Netflix  ', 'fa fa-play', 'https://www.netflix.com/'),


                ]),


            MenuItem::section('Administration'),
                MenuItem::subMenu('Gestion Utilisateur', 'fa fa-user')->setSubItems([
                    MenuItem::linkToCrud('Liste Utilisateurs', 'fa fa-list-ol', User::class)                    
                    ->setAction('index'),
                    MenuItem::linkToCrud('Ajouter Utilisateur', 'fa fa-user-plus', User::class)                    
                    ->setAction('new'),
                ]),
                MenuItem::subMenu('Gestion Series', 'fa fa-tags')->setSubItems([
                    MenuItem::linkToCrud('Liste Series', 'fa fa-photo-video', Serie::class)                    
                    ->setAction('index'),
                    MenuItem::linkToCrud('Ajouter une série', 'fa fa-plus', Serie::class)                    
                    ->setAction('new'),
                ]),
                MenuItem::subMenu('Gestion Films', 'fa fa-film')->setSubItems([
                    MenuItem::linkToCrud('Liste Films', 'fa fa-tags', Film::class)                    
                    ->setAction('index'),
                    MenuItem::linkToCrud('Ajouter un Film', 'fa fa-plus', Film::class)                    
                    ->setAction('new'),
                ]),




        ];
    }
    
}
