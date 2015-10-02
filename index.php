<?php

require_once __DIR__ . "/vendor/autoload.php";

use LibraryController\Mvc\Application;
use LibraryController\Mvc\Http\Request;
use LibraryController\Mvc\Http\Response;
use LibraryController\Mvc\Dispatcher;
use LibraryController\Mvc\Router\Route;
use LibraryController\Mvc\Router\Router;

// Request
$request    = new Request("http://example.com/test/");
$response   = new Response;

// Routes
$route1     = new Route("http://example.com/test/", "Site\\Controller\\IndexController");
$router     = new Router(array($route1));

// dispatcher
$dispatcher = new Dispatcher;

// Application
$frontController = new Application($router, $dispatcher);
$frontController->run($request, $response);