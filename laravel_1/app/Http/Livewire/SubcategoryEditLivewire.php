<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SubcategoryEditLivewire extends Component
{
    public string $text = '';
    public int $index;
    public string $name;
    public string $ok;

    protected array $rules = [
      'text' => 'required|unique:subcategories,name|min:3|max:20',
    ];

    public function update($id){
      $this->validate();
      $this->ok = 'NICE';
      DB::table('subcategories')->where('id',$id)->update(['name'=>$this->text]);
    }

}
