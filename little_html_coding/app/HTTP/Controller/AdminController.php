<?php

namespace Prushak\MvcLocal\HTTP\Controller;

class AdminController extends BaseController {
  public function index(){
    $conn = include '../config/connect_db.php';
    $product = (include "../database/migration/product_migrate.php")[0];
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    include '../resource/view/layout/admin.php';
  }
  public function create(){
    include '../resource/view/layout/admin.php';
  }
  public function store(){
    $conn = include '../config/connect_db.php';
    $product = (include "../database/migration/product_migrate.php")[0];
    echo 'sdf';
    var_dump($_POST);
    var_dump($_FILES);
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $file = uniqid('img_').".png";
//    echo "<pre>";
//    var_dump($_FILES);
//    echo "</pre>";
    $sql = "INSERT INTO product (name,price,description,img) VALUES ('{$_POST['name']}','$price','$description','$file')";
    $conn->exec($sql);
  }
}