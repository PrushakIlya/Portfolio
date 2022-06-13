<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
  public function index()
  {
    $product = DB::table('categories')->join(
      'products',
      'categories.id',
      '=',
      'products.category_id'
    )->paginate(12);
    return view('section.product.index', compact('product'));
  }

  public function show($category, $product)
  {
    $product = DB::table('products')->where('name', $product)->get();
    return view('section.product.show', compact('product'));
  }
}
