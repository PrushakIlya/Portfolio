<?php

namespace Prushak\MvcLocal\HTTP\Controller;

class FrontController extends BaseController
{
  public function index()
  {
    include '../resource/view/layout/layout.php';
  }

  public function autorize()
  {
    return __METHOD__;
  }

  public function persanal()
  {
    return __METHOD__;
  }
}