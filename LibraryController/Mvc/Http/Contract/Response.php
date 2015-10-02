<?php

namespace LibraryController\Mvc\Http\Contract;


interface Response
{
  public function addHeader($header);
  public function addHeaders(array $headers);
  public function getHeaders();
  public function send();
}