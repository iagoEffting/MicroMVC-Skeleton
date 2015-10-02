<?php

namespace LibraryController\Mvc\Router;

use LibraryController\Mvc\Http\Contract\Request as RequestInterface;
use LibraryController\Mvc\Http\Contract\Response as ResponseInterface;


class Router {
  public function __construct($routes) {
    $this->addRoutes($routes);
  }

  public function addRoute(Route $route) {
    $this->routes[] = $route;
    return $this;
  }

  public function addRoutes(array $routes) {
    foreach ($routes as $route) {
      $this->addRoute($route);
    }
    return $this;
  }

  public function getRoutes() {
    return $this->routes;
  }

  public function route(RequestInterface $request, ResponseInterface $response) {
    foreach ($this->routes as $route) {
      if ($route->match($request)) {
        return $route;
      }
    }
    $response->addHeader("404 Page Not Found")->send();
    throw new \OutOfRangeException("No route matched the given URI.");
  }
}