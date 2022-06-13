<?php

namespace App\Http\Servises;

class TestServise
{
  public $name;
  public function set($name){
    $this->name = $name;
  }
  public function get(){
    return $this->name;
  }
}