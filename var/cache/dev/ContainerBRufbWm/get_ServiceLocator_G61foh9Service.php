<?php

namespace ContainerBRufbWm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G61foh9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G61foh9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G61foh9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
        ], [
            'postsRepository' => 'App\\Repository\\PostsRepository',
        ]);
    }
}
