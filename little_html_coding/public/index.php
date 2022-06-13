<?php
include_once '../vendor/autoload.php';
include_once '../route/Web.php';

$web = new Web();
$web->route();




//Create tables: USER and PRODUCT (use only one time)!!!!!
//
//try {
//  $conn = include '../config/connect_db.php';
//  $sql = include '../database/migration/product_migrate.php';
//  foreach ($sql as $item) {
//    $conn->exec($item);
//  }
//  echo "Table Users has been created";
//}
//catch (PDOException $e) {
//  echo "Table have already exist: " . $e->getMessage();
//}





