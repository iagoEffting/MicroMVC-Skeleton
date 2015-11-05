<?php

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface as ServiceProvider;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


class DoctrineServiceProvider implements ServiceProvider
{

    public function register(Container $container)
    {

        $config     = $container->offsetGet('config')['db'];
        $dbParams   = $config['params'];
        $paths      = $config['path_entity'];
        $isDevMode  = $config['dev_mode'];

        $config         = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $entityManager  = EntityManager::create($dbParams, $config);

        $container->offsetSet('db', $entityManager);
    }

}