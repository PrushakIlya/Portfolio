<?php

namespace App\Http\Livewire;

use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Integer;

class SubcategoryLivewire extends Component
{
  use WithPagination;

  public function render()
  {
    $subcategory = Subcategory::paginate(10)->appends(['ilya'=>'nice']);
    return view('livewire.subcategory-livewire', compact('subcategory'));
  }

  public function destroy($id)
  {
    DB::table('subcategories')->delete($id);
  }
}
