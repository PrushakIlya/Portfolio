<?php

namespace Prushak\SlmaxBy\HTTP\Model;

class BookModel
{
  private $connect_db;

  public function __construct()
  {
    $this->connect_db = include '../config/connect_db.php';
  }

  public function destroy($id)
  {
    $sql = "DELETE FROM book WHERE id = $id";
    $this->connect_db->exec($sql);
  }

  public function store()
  {
    $sql = "INSERT INTO book (name, description, price)
            VALUES ('{$_POST['name']}', '{$_POST['description']}','{$_POST['price']}')";
    $this->connect_db->exec($sql);
  }

  public function index()
  {
    $sql = "SELECT * FROM book";
    $result = $this->connect_db->query($sql);
    return $result;
  }

  public function edit($id)
  {
    $sql = "SELECT * FROM book WHERE id = $id";
    $result = $this->connect_db->query($sql);
    $item = $result->fetch();
    return $item;
  }

  public function update($id)
  {
    $sql = "UPDATE book SET name='{$_POST['name']}', description='{$_POST['description']}', price='{$_POST['price']}' WHERE id = $id";
    $this->connect_db->exec($sql);
  }
}