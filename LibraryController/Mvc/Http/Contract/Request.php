<?php

namespace LibraryController\Mvc\Http\Contract;

interface Request
{
  public function setParam($key, $value);
  public function getParam($key);
  public function getParams();
  public function getUri();
}