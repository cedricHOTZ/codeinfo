<?php

namespace ContainerBRufbWm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Service_FilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.service.filter' shared service.
     *
     * @return \Liip\ImagineBundle\Service\FilterService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Service/FilterService.php';

        return $container->privates['liip_imagine.service.filter'] = new \Liip\ImagineBundle\Service\FilterService(($container->services['liip_imagine.data.manager'] ?? $container->load('getLiipImagine_Data_ManagerService')), ($container->services['liip_imagine.filter.manager'] ?? $container->load('getLiipImagine_Filter_ManagerService')), ($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), false, $container->parameters['liip_imagine.webp.options'], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
