<?php

namespace App\Models;

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nette\SmartObject;

class Product extends Model
{
  use HasFactory, SoftDeletes;

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function orders(){
    return $this->belongsToMany(Order::class);
  }

  public function totall_price(){
    return $this->price*$this->pivot->count.'$';
  }
}
