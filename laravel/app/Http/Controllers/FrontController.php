<?php

namespace App\Http\Controllers;

use App\Models\File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
  public function index(): object
  {
    return view('layout.layout');
  }

  public function create()
  {
    return view('test.test');
  }

  public function store(Request $request)
  {
//    $file = $request->file('file');
//    dump($file->getClientOriginalName());
//    dump($file->getClientOriginalExtension());
//    dump($file->hashName());
//    dump($file->extension());
//    $file = $request->file('file')->storePublicly('tt','public');

//    $path = $request->file('file')->storeAs('avatar_user','_1');
////    $path = \Storage::putFile('avatar_user',$request->file('file'));
//    DB::table('files')->insert(['img'=>$path,'created_at'=>Carbon::now()]);
//    return view('layout.layout',compact('path'));
  }
}
