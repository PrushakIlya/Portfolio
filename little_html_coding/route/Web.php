<?php

use Prushak\MvcLocal\HTTP\Controller\FrontController;

class Web{
    private $routes;
    public function __construct()
    {
      $this->routes = include '../config/routes.php';
    }

    public function route(){

      foreach ($this->routes as $key=>$route){
        $route = explode('/',$route);
        $controller = array_shift($route);
        $controller = ucfirst($controller).'Controller';
        $method = array_shift($route);
        if($_SERVER['REQUEST_URI']===$key){
          $controller = new ('Prushak\MvcLocal\HTTP\Controller\\'.$controller);
          return $controller->$method();
        }
      }
    }
  }