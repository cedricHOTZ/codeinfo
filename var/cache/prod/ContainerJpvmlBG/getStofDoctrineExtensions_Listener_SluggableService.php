<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStofDoctrineExtensions_Listener_SluggableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'stof_doctrine_extensions.listener.sluggable' shared service.
     *
     * @return \Gedmo\Sluggable\SluggableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['stof_doctrine_extensions.listener.sluggable'] = $instance = new \Gedmo\Sluggable\SluggableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
