<?php

namespace Prushak\SlmaxBy\HTTP\Request;
class StoreRequest extends BaseRequest
{
  private object $request;
  public function __construct()
  {
    $this->request = new BaseRequest();
  }

  public function check_errors()
  {
    $errors = $this->request->check_rules();
    if ($errors) {
      foreach ($errors as $index=>$error){
        setcookie('error_'.$index,$error,time()+1,'/');
      }
      header("Location: /create");
      exit;
    }
  }

}