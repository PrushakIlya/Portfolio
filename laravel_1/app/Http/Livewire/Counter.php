<?php

namespace App\Http\Livewire;

use App\Models\Catalog;
use Livewire\Component;


class Counter extends Component
{
  public int $catalog_id = 1;
  public bool $flag = false;
  public string $name = 'ilya';
  public int $value = 1;


  public function loadMore($id)
  {
    if($id === $this->catalog_id){
      $this->flag = false;
    }
    else $this->flag = true;
    $this->catalog_id=$id;
  }

  public function render():object
  {
    $name = $this->name;
    $flag = $this->flag;
    $catalog = Catalog::all();
    $category = Catalog::find($this->value)->category;

    return view('livewire.counter',compact('catalog','category','name','flag'));
  }
}
