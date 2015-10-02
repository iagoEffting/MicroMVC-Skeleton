<?php

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface as ServiceProvider;
use IagoEffting\MicroMVC\Reflection\Reflection;

class AnnotationsServiceProvider implements ServiceProvider
{

  protected $routes = array();
  protected $controllers = array();

  public function register(Container $container)
  {
    $pathController = $container['config']['app']['Controllers'];
    $path = realpath($container->offsetGet('basePath').'/'.$pathController);

    $this->getAllControllers($path);

    foreach ($this->controllers as $controller) {

      $methods = Reflection::getMethods($controller);
      foreach ($methods as $action) {

        $reader = new \DocBlockReader\Reader($controller, $action->name);
        $this->routes[] = array(
          'path' => $reader->getParameter('Route'),
          'Controller' => $controller,
          'Action' => $action->name
        );

      }

    }

    $container->offsetSet('routes', $this->routes);

  }

  private function getAllControllers($path)
  {
    $directory = dir($path);
    while ($file = $directory->read()) {
      if ($file != '.' && $file != '..' ) {
        $controller = str_replace('.php', '', $file);
        $this->controllers[] = '\\App\\Http\\Controllers\\' .$controller;
      }
    }
    $directory->close();


  }

}