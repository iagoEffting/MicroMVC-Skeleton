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

      $data = array(
          'key' => 'value'
      );

      return new ViewModel("index/index", $data);
  }

}