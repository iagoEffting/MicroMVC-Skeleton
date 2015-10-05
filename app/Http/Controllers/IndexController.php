<?php

namespace App\Http\Controllers;

use IagoEffting\MicroMVC\View\ViewModel;

class IndexController
{

  /**
   * @Route /
   */
  public function index()
  {

    return new ViewModel("index/index");
  }

}