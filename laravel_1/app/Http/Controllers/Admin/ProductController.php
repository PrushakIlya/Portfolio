<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\CatalogCategories;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Database\Seeders\CatalogCategoriesSeeder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(): object
  {
    $paginator = \DB::table('products')->paginate(10, ['id', 'name', 'vendor_code']);
    return view('admin.product.index', compact('paginator'));
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show($id): object
  {
    $product = Product::all()->where('id', '=', $id);
    $catalog = Product::find($id)->catalog;
    $category = Product::find($id)->category;
    $subcategory = Product::find($id)->subcategory;
    return view('admin.product.show', compact('product', 'category', 'catalog', 'subcategory'));
  }

  public function edit($id,Catalog $catalog)
  {

    $flag = true;
    $books = Catalog::all();

    if($flag){
      $tt = $books->load('category')->all();
      foreach ($tt as $item){
        foreach ($item->category as $kk){
          dump($kk->name);
        }
      }
    }




//    $product = Product::all()->where('id', $id);
//    $catalog = Product::find($id)->catalog;
//    $category = Product::find($id)->category;
//    $subcategory = Product::find($id)->subcategory;
//    $catalog_edit = Catalog::all('id','name');
//    $catalog_category = Catalog::all('id','name')->where('id',$catalog->id);
//    $category_catalog_arr = array();
//
//    foreach ($catalog_category as $item){
//      foreach ($item->category as $key){
//        array_push($category_catalog_arr,$key->name);
//      }
//    }
//
//    $catalog_arr = [];
//    foreach ($catalog_edit as $item){
//      array_push($catalog_arr,$item->name);
//    }
//
//
//
//    return view('admin.product.edit', compact('id', 'product', 'category', 'catalog',
//      'catalog_arr', 'subcategory','category_catalog_arr'));
  }

  public function update(Request $request, $id)
  {
    \DB::table('products')->where('id', $id)->update();
  }

  public function destroy($id): object
  {
    Product::destroy($id);
    return redirect()->back();
  }
}

