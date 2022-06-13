<?php

namespace Prushak\SlmaxBy\HTTP\Request;

class BaseRequest
{
  private $errors = [];

  public function check_rules()
  {
    strlen($_POST["name"]) <= 20 && strlen($_POST["name"]) >= 3 ?: array_push($this->errors, 'field name: length 3-20');
    strlen($_POST["lastname"]) <= 30 && strlen($_POST["lastname"]) >= 3 ?: array_push($this->errors, 'field lastname: length 3-30');
    preg_match('~\d{4}\-\d{1,2}\-\d{1,2}~', $_POST['age']) ?: array_push($this->errors, 'field age: uncorrect');
    $age = explode('-', $_POST['age']);
    array_shift($age) >= 1920 ?: array_push($this->errors, 'field age: year is not correct');
    array_shift($age) <= 12 ?: array_push($this->errors, 'field age: month is not correct');
    array_shift($age) <= 31 ?: array_push($this->errors, 'field age: date is not correct');

    strlen($_POST["city"]) <= 30 && strlen($_POST["city"]) >= 3 ?: array_push($this->errors, 'field city: length 3-30');
    return $this->errors;
  }
}