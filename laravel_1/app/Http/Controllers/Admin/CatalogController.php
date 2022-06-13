<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catalog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends BaseController
{
  public function index(): object
  {
    $catalog = DB::table('catalogs')->orderBy('id')->get(['id','name']);
    return view('admin.catalog.index', compact('catalog'));
  }

  public function update($id, Request $request): object
  {
    DB::table('catalogs')->where('id', '=', $id)->update(['name' => $request['catalog_name']]);
    return redirect()->route('admin.catalog.index');
  }

  public function edit($id): object
  {
    $name = '';
    $item = DB::table('catalogs')->get(['id', 'name'])->where('id', '=', $id);
    foreach($item as $value){
      $name = $value->name;
    }
    return view('admin.catalog.edit', compact('name', 'id'));
  }

  public function destroy($id): object
  {
    DB::table('catalogs')->delete($id);
    return redirect()->back();
  }

  public function show($id): string
  {
    return __METHOD__;
  }

  public function create(): object
  {
    return view('admin.catalog.create');
  }

  public function store(Request $request): object
  {
    DB::table('catalogs')->insert(['name' => $request['name']]);
    return redirect()->route('admin.catalog.store');
  }

  public function category($id)
  {
    $category = Catalog::all('id', 'name')->where('id', '=', $id);

    return view('admin.catalog.category', compact('category'));
  }
}
