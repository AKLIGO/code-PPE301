<?php

namespace ContainerMmQaMub;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_EntityManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.entity_manager' shared autowired service.
     *
     * @return \Doctrine\ORM\EntityManagerInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.entity_manager'] = ($container->services['doctrine'] ?? $container->getDoctrineService())->getManager();
    }
}