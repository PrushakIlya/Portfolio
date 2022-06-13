<?php

use App\Http\Controllers\Admin\BaseController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/mail',function (){
  Mail::to('i24199724i@gmail.com')->send(new TestMail());
});

Route::get('/admin',[BaseController::class,'index']);

