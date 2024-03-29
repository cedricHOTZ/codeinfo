<?php

namespace ContainerB7kx8LP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyAdminSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\EasyAdminSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\EasyAdminSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/EasyAdminSubscriber.php';

        return $container->privates['App\\EventSubscriber\\EasyAdminSubscriber'] = new \App\EventSubscriber\EasyAdminSubscriber(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.security.password_encoder'] ?? $container->load('get_Container_Private_Security_PasswordEncoderService')));
    }
}
