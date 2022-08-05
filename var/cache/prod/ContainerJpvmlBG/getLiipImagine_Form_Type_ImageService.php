<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Form_Type_ImageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }
}
