<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Command_CacheResolveService extends App_KernelProdContainer
{
    /*
     * Gets the private 'liip_imagine.command.cache_resolve' shared service.
     *
     * @return \Liip\ImagineBundle\Command\ResolveCacheCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['liip_imagine.command.cache_resolve'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), ($container->services['liip_imagine.filter.manager'] ?? $container->load('getLiipImagine_Filter_ManagerService')), ($container->privates['liip_imagine.service.filter'] ?? $container->load('getLiipImagine_Service_FilterService')));

        $instance->setName('liip:imagine:cache:resolve');

        return $instance;
    }
}
