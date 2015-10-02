<?php

namespace LibraryController\Mvc;


class Dispatcher {

  public function dispatch($route, $request, $response)
  {
    $controller = $route->createController();

    echo $controller->index($request, $response);
  }
}