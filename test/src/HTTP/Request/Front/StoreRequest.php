<?php

namespace Prushak\SlmaxBy\HTTP\Request\Front;

use Prushak\SlmaxBy\HTTP\Controller\BaseController;
use Prushak\SlmaxBy\HTTP\Request\BaseRequest;

class StoreRequest extends BaseController
{
  private object $request;

  public function __construct()
  {
    $this->request = new BaseRequest();
  }

  public function check_rules()
  {
    $errors = $this->request->check_rules();

    if ($errors) {
      foreach ($errors as $index => $error) {
        setcookie('error_' . $index, $error, time() + 1, '/');
      }
      header("Location: /create");
      exit;
    }
  }
}