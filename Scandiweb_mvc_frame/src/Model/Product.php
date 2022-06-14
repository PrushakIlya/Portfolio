<?php

namespace Prushak\Scandiweb\Model;

use PDO;

class Product
{
  private $conn;

  public function __construct()
  {
    $this->conn = include '../config/connect_db.php';
  }
  public function index()
  {
    $sql = "SELECT * FROM products";
    $statment = $this->conn->query($sql);
    $results = $statment->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function store($name_file)
  {
    $sql = "INSERT INTO products (sku,name,price,size,weight,dimensions,image)
    VALUES ('{$_POST['sku']}','{$_POST['name']}','{$_POST['price']}','{$_POST['size']}','{$_POST['weight']}','{$_POST['dimensions']}','{$name_file}')";
    $this->conn->exec($sql);
  }

  public function destroy()
  {
    foreach ($_POST as $id => $item) {
      $sql = "DELETE FROM products WHERE id = $id";
      $this->conn->exec($sql);
    }
  }
}
