<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\CatalogRequest;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends BaseController
{
  public function index(): object
  {
    return response()->json(Catalog::withoutTrashed()->orderBy('id')->get());
  }

  public function update($id, CatalogRequest $request)
  {
    $catalog = Catalog::find($id);
    $catalog->name = $request->get('name');
    $catalog->save();
  }

  public function edit($id): object
  {
    $name = '';
    $item = DB::table('catalogs')->get(['id', 'name'])->where('id', '=', $id);
    foreach ($item as $value) {
      $name = $value->name;
    }
    return view('admin.catalog.edit', compact('name', 'id'));
  }

  public function destroy($id)
  {
    return response()->json(Catalog::find($id)->delete());
  }

  public function show($id)
  {
    return response()->json(Catalog::get()->where('id', $id));
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

  public function json()
  {
    return json_encode(DB::table('catalogs')->get(['id', 'name']), JSON_UNESCAPED_UNICODE);
  }
}