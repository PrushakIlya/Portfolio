<?php


namespace Prushak\Scandiweb\HTTP\Controller;

use Prushak\Scandiweb\Model\Product;
use Prushak\Scandiweb\Request\ProductRequest;

class FrontController extends BaseController
{
  private $product_model;
  private $product_request;

  public function __construct()
  {
    $this->product_model = new Product();
    $this->product_request = new ProductRequest();
  }

  public function index()
  {
    $results = $this->product_model->index();
    include '../resources/views/layout/layout.php';
  }

  public function store()
  {
    if ($this->product_request->check_errors()) {
      return header('Location:/create');
    }
    $results = $this->product_model->store($this->product_request->get_file());
    return header('Location:/');
  }

  public function destroy()
  {
    $this->product_model->destroy();
    return header('Location:/');
  }

  public function create()
  {
    include '../resources/views/layout/layout.php';
  }
}
