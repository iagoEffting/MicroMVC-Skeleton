<?php

namespace App\Providers;

use Pimple\ServiceProviderInterface;

class RouteServiceProvider implements ServiceProviderInterface
{

  protected $namespace = 'App\Http\Controllers';
  protected $routes = __DIR__.'/../Http/routes';


  public function register(\Pimple\Container $pimple)
  {
    $pimple['routes'] = 'teste';
    var_dump($this->getRoutes());
  }

  public function getRoutes()
  {
    $routes = include(realpath(__DIR__.'/../Http/routes.php'));
    return $routes;

  }

}