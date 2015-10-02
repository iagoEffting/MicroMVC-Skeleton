<?php

namespace LibraryController\Mvc;

use LibraryController\Mvc\Http\Contract\Request as RequestInterface;
use LibraryController\Mvc\Http\Contract\Response as ResponseInterface;

class Application
{

  public function __construct($router, $dispatcher) {
    $this->router = $router;
    $this->dispatcher = $dispatcher;
  }

  public function run(RequestInterface $request, ResponseInterface $response) {
    $route = $this->router->route($request, $response);
    $this->dispatcher->dispatch($route, $request, $response);
  }
}