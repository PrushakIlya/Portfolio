<?php

namespace Prushak\Bacteria\HTTP\Controller;

setcookie('error', ' ', time() + 3600, '/');

class FrontController extends BaseController
{
  private $red = 0;
  private $green = 0;

  public function index()
  {
    include "../resource/view/layout/layout.php";
  }

  public function calculate()
  {
    if (!$this->check_request()) {
      return header('Location: /');
    }
    $this->check_request();
  
    $red_2 = $_GET['red_bacteria'];
    $green_2 = $_GET['green_bacteria'];

    for($i=0;$i<$_GET['tact'];$i++){
      $this->red = ($red_2*3)+($green_2*2);
      $this->green = ($red_2*4)+($green_2*5);
      $red_2 = $this->red;
      $green_2 = $this->green;
    }

    setcookie(
      'answer',
      $this->red . '/' . $this->green,
      time() + 3600,
      '/'
    );

    header('Location: /answer');
  }

  public function answer()
  {
    if ($_COOKIE) {
      $answer = explode('/', $_COOKIE['answer']);
      return include "../resource/view/layout/layout.php";
    }
    return header('Location: /');
  }

  private function check_request()
  {
    if ($_GET) {
      $red = preg_match('~^[0-9]+$~', $_GET['red_bacteria']);
      $green = preg_match('~^[0-9]+$~', $_GET['green_bacteria']);
      $tact = preg_match('~^[0-9]+$~', $_GET['tact']);
      if (!($red && $green && $tact)) {
        setcookie(
          'error',
          'Enter only number',
          time() + 100,
          '/'
        );
        return 0;
      }
      return 1;
    }
  }
}
