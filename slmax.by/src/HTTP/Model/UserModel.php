<?php

namespace Prushak\SlmaxBy\HTTP\Model;

class UserModel
{
  private $connect_db;

  public function __construct()
  {
    $this->connect_db = include '../config/connect_db.php';
  }

  public function destroy($id)
  {
    $sql = "DELETE FROM users WHERE id = $id";
    $this->connect_db->exec($sql);
  }

  public function store()
  {
    $sql = "INSERT INTO users (name, lastname, age, sex, city )
            VALUES ('{$_POST['name']}', '{$_POST['lastname']}','{$_POST['age']}','{$_POST['sex']}','{$_POST['city']}')";
    $this->connect_db->exec($sql);
  }

  public function index()
  {
    $sql = "SELECT * FROM users";
    $result = $this->connect_db->query($sql);
    return $result;
  }

  public function edit($id)
  {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $this->connect_db->query($sql);
    $item = $result->fetch();
    return $item;
  }

  public function update($id)
  {
    $sql = "UPDATE users SET name='{$_POST['name']}', lastname='{$_POST['lastname']}', age='{$_POST['age']}'
                 ,sex='{$_POST['sex']}',city='{$_POST['city']}' WHERE id = $id";
    $this->connect_db->exec($sql);
  }
}