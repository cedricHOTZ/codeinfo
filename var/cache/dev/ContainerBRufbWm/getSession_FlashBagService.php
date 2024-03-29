<?php

namespace ContainerBRufbWm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_FlashBagService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.flash_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Flash\FlashBag
     *
     * @deprecated Since symfony/framework-bundle 5.1: The "session.flash_bag" service is deprecated, use "$session->getFlashBag()" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.1', 'The "session.flash_bag" service is deprecated, use "$session->getFlashBag()" instead.');

        return $container->privates['session.flash_bag'] = ($container->services['.container.private.session'] ?? $container->load('get_Container_Private_SessionService'))->getFlashBag();
    }
}
