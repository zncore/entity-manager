<?php

use Psr\Container\ContainerInterface;
use ZnCore\Container\Interfaces\ContainerConfiguratorInterface;
use ZnCore\EntityManager\Interfaces\EntityManagerConfiguratorInterface;
use ZnCore\EntityManager\Interfaces\EntityManagerInterface;
use ZnCore\EntityManager\Libs\EntityManager;
use ZnCore\EntityManager\Libs\EntityManagerConfigurator;

return function (ContainerConfiguratorInterface $containerConfigurator) {
    $containerConfigurator->singleton(EntityManagerInterface::class, function (ContainerInterface $container) {
        $em = EntityManager::getInstance($container);
//            $eloquentOrm = $container->get(EloquentOrm::class);
//            $em->addOrm($eloquentOrm);
        return $em;
    });

    $containerConfigurator->singleton(EntityManagerConfiguratorInterface::class, EntityManagerConfigurator::class);
};
