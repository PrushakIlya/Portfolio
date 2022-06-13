<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
  public function index(): object
  {
    $subcategory = Subcategory::orderBy('id')->paginate(10, ['id', 'name']);
    return view('admin.subcategory.index', compact('subcategory'));
  }

  public function create()
  {
    //
  }

  public function store(SubcategoryRequest $request)
  {
    //
  }


  public function edit($id)
  {
    $name = '';
    $item = \DB::table('subcategories')->where('id', $id)->get('name');
    foreach ($item as $value) {
      $name = $value->name;
    }
    return view('admin.subcategory.edit', compact('name', 'id'));
  }

  public function update($id)
  {
    return __METHOD__;
  }

  public function destroy($id)
  {
    \DB::table('subcategories')->delete($id);
    return redirect()->back();
  }
  public function back()
  {
    return redirect()->back();
  }
}
