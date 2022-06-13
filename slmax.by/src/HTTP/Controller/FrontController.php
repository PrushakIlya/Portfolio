<?php


namespace Prushak\SlmaxBy\HTTP\Controller;

use Prushak\SlmaxBy\HTTP\Request\StoreRequest;
use Prushak\SlmaxBy\HTTP\Request\UpdateRequest;
use Prushak\SlmaxBy\HTTP\Model\UserModel;

class FrontController extends BaseController
{
  private $id;
  private $user_model;
  private $store_request;
  private $update_request;

  public function __construct()
  {
    $this->user_model = new UserModel();
    $this->store_request = new StoreRequest();
    $this->update_request = new UpdateRequest();
  }

  public function index(): void
  {
    $result = $this->user_model->index();
    include '../resource/view/layout/layout.php';
  }

  public function create()
  {
    include_once '../resource/view/layout/layout.php';
  }

  public function store()
  {
    $this->store_request->check_errors();
    $this->user_model->store();
    header('Location: /');
  }

  public function destroy($id): void
  {
    $this->user_model->destroy($id);
    header("Location: /");
  }

  static function get_age($age): string
  {
    $age_db = explode('-', $age);
    $date = date("Y-n-j");
    $date = explode('-', $date);
    $age = array_shift($date) - array_shift($age_db);
    if (array_shift($age_db) > array_shift($date)) {
      return $age - 1;
    }
    return $age;
  }

  static function get_sex($sex): string
  {
    return $sex === 1 ? 'male' : 'female';
  }

  public function edit($id): void
  {
    $this->id = $id;
    $item = $this->user_model->edit($id);
    include '../resource/view/layout/layout.php';
  }

  public function update($id)
  {
    $this->update_request->check_errors($id);
    $this->user_model->update($id);
    header("Location: /");
  }
}