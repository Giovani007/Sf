<?php

namespace ContainerQwZ61ua;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilmCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\FilmCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\FilmCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\FilmCrudController'] = $instance = new \App\Controller\Admin\FilmCrudController();

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\FilmCrudController', $container));

        return $instance;
    }
}
