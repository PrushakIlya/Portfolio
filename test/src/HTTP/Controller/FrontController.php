<?php


namespace Prushak\SlmaxBy\HTTP\Controller;

use Prushak\SlmaxBy\HTTP\Model\BookModel;
use Prushak\SlmaxBy\HTTP\Request\Front\StoreRequest;
use Prushak\SlmaxBy\HTTP\Request\Front\UpdateRequest;

class FrontController extends BaseController
{
  private $id;
  private $book_model;
  private $store_request;
  private $update_request;

  public function __construct()
  {
    $this->book_model = new BookModel();
    $this->store_request = new StoreRequest();
    $this->update_request = new UpdateRequest();
  }

  public function index(): void
  {
    $result = $this->book_model->index();
    include '../resource/view/layout/layout.php';
  }

  public function create()
  {
    include_once '../resource/view/layout/layout.php';
  }

  public function store()
  {
    $this->store_request ->check_rules();
    $this->book_model->store();
    header('Location: /');
  }

  public function destroy($id): void
  {
    $this->book_model->destroy($id);
    header("Location: /");
  }

  public function edit($id): void
  {
    $this->id = $id;
    $item = $this->book_model->edit($id);
    include '../resource/view/layout/layout.php';
  }

  public function update($id)
  {
    $this->update_request->check_rules($id);
    $this->book_model->update($id);
    header("Location: /");
  }
}