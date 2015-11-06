<?php

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface as ServiceProvider;
use Illuminate\Database\Capsule\Manager as Capsule;


class EloquentServiceProvider implements ServiceProvider
{

    public function register(Container $container)
    {
        $config  = $container->offsetGet('config')['db'];
        $capsule = new Capsule;

        $capsule->addConnection($config['params']);
        $capsule->bootEloquent();

    }

}