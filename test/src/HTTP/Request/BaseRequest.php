<?php

namespace Prushak\SlmaxBy\HTTP\Request;
class BaseRequest
{
  private $errors = [];

  public function check_rules()
  {
    strlen($_POST["name"]) <= 20 && strlen($_POST["name"]) >= 3 ?: array_push($this->errors, 'field name: length 3-20');
    strlen($_POST["description"]) <= 100 && strlen($_POST["description"]) >= 5 ?: array_push($this->errors, 'field lastname: length max 100');
    is_numeric($_POST["price"]) ?: array_push($this->errors, 'field price: not a number');
    return $this->errors;
  }
}