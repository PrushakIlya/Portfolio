<?php
$db_param = include 'db.php';
$conn = new PDO("mysql:host=" . $db_param['host'] . ";port=" . $db_param['port'] . ";
      dbname=" . $db_param['dbname'],
  $db_param['root'], $db_param['root_password']);
return $conn;
