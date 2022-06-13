<?php

namespace Prushak\SlmaxBy\HTTP\Controller;

class FilterController extends BaseController
{
  private $connect_db;
  private string $id_book = '';

  public function __construct()
  {
    $this->connect_db = include '../config/connect_db.php';
    $match = preg_match('~([0-9]+)-([0-9]+)~',$_GET['filter']);
    if($match){
      $ids = explode('-',$_GET['filter']);
      $id_start = array_shift($ids);
      $id_end = array_shift($ids);
      for ($i=$id_start;$i<=$id_end;$i++){
        $this->id_book.=$i.',';
      }
      $this->id_book = substr($this->id_book,0, -1);
    }
    else header('Location: /');
  }

  public function delete()
  {
    $sql = "DELETE FROM book WHERE id IN ($this->id_book)";
    $this->connect_db->exec($sql);
    header('Location: /');
  }
}