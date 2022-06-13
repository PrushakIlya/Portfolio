<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends BaseController
{
  public function index()
  {
    $category = DB::table('categories')->get();
    return view('section.category.index', compact('category'));
  }

  public function show($code)
  {
    // dd($category);
    $category = Category::all(['id', 'code', 'name'])->where('code', $code);
    $name = null;
    foreach($category as $item){
      $name = $item->name;
    }
    return view('section.category.show', compact(['category', 'code','name']));
  }

}
