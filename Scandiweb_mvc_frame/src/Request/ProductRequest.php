<?php

namespace Prushak\Scandiweb\Request;

use Prushak\Scandiweb\Model\Product;

class ProductRequest
{
  private $product;
  private $errors = [];
  private $list_errors;

  public function __construct()
  {
    $this->product = new Product();
    $this->list_errors = include '../config/errors.php';
  }

  public function check_errors()
  {
    !$_POST['sku'] || !$_POST['name'] || !$_POST['price'] ? array_push($this->errors, $this->list_errors[1]) : '';
    count($_POST) == 3 ? array_push($this->errors, $this->list_errors[2]) : '';
    $this->check_int('price', $this->list_errors[4]);

    foreach ($this->product->index() as $item) {
      $_POST['sku'] == $item['sku'] ? array_push($this->errors, $this->list_errors[10]) : '';
      $_POST['name'] == $item['name'] ? array_push($this->errors, $this->list_errors[11]) : '';
    }

    if ($this->errors) {
      setcookie('errors', json_encode($this->errors), time() + 1, '/');
      return $this->errors;
    }

    if (count($_POST) == 5) {
      if ($_POST['type_switcher'] == 'size') {
        if (!$_POST['size']) {
          array_push($this->errors, $this->list_errors[12]);
        } else {
          $this->check_int('size', $this->list_errors[6]);
        }
      } elseif ($_POST['type_switcher'] == 'weight') {
        if (!$_POST['weight']) {
          array_push($this->errors, $this->list_errors[13]);
        } else {
          $this->check_int('weight', $this->list_errors[5]);
        }
      }
    }
    if (count($_POST) == 7) {
      if ($_POST['type_switcher'] == 'dimensions') {
        if (!$_POST['height'] || !$_POST['width'] || !$_POST['length']) {
          array_push($this->errors, $this->list_errors[3]);
        } else {
          $_POST['dimensions'] = $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'];
        }
        $this->check_int('height', $this->list_errors[7]);
        $this->check_int('width', $this->list_errors[8]);
        $this->check_int('length', $this->list_errors[9]);
      }
    }
  }

  private function check_int($key, $error)
  {
    preg_match('~[A-Za-z]~', $_POST[$key]) ? array_push($this->errors, $error) : '';
  }

  public function get_file()
  {
    if ($_FILES['image']['name'] != '') {
      $name_file = uniqid('img_') . ".png";
      move_uploaded_file($_FILES['image']['tmp_name'], ($_SERVER['DOCUMENT_ROOT'] . "/img/$name_file"));
    } else {
      $name_file = "php.png";
    }
    return $name_file;
  }
}
