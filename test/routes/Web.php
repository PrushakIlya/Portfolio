<?php

class Web
{
  private array $routes;

  public function __construct()
  {
    $this->routes = include '../config/routes.php';
  }

  public function route()
  {

    foreach ($this->routes as $key => $route) {

      $match = preg_match("~$key~", $_SERVER['REQUEST_URI']);
      if ($match) {

        $pattern = $key;
        $replacement = $route;
        $string = $_SERVER['REQUEST_URI'];
        $route = preg_replace("~$pattern~", $replacement, $string);
        $route = explode('/', $route);


        $controller = array_shift($route);
        $controller = ucfirst($controller) . 'Controller';

        $method = array_shift($route);
        $id = array_shift($route);
        $method = explode('?',$method);
        $method = array_shift($method);


        $controller = new ('Prushak\SlmaxBy\HTTP\Controller\\' . $controller);
        echo $id?$controller->$method($id):$controller->$method();
        return 0;
      }
    }
  }
}

