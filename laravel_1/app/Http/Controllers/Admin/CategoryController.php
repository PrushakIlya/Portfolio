<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends BaseController
{
  public function index(): object
  {
    $category = \DB::table('categories')->get(['id', 'name'])->sortBy('id');
    return view('admin.category.index', compact(['category']));
  }

  public function create() : object
  {
    return view('admin.category.create');
  }

  public function store(Request $request) : object
  {
    Category::insert(['name'=>$request['name']]);
    return redirect()->route('admin.category.index');
  }

  public function update($id, Request $request): object
  {
    DB::table('categories')->where('id', '=', $id)->update(['name' => $request['category_name']]);
    return redirect()->route('admin.category.index');
  }

  public function edit($id): object
  {
    $name = '';
    $item = DB::table('categories')->get(['id', 'name'])->where('id', '=', $id);
    foreach ($item as $value){
      $name = $value->name;
    }
    return view('admin.category.edit', compact('name', 'id'));
  }

  public function destroy($id): object
  {
    DB::table('categories')->delete($id);
    return redirect()->back();
  }
  public function subcategory($id){
    $subcategory = Category::all('id','name')->where('id','=',$id);
    return view('admin.category.subcategory',compact('subcategory'));
  }
}
