<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\TagController' shared autowired service.
     *
     * @return \App\Controller\TagController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\TagController'] = $instance = new \App\Controller\TagController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\TagController', $container));

        return $instance;
    }
}
