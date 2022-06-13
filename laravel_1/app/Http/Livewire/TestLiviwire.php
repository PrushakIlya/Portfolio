<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestLiviwire extends Component
{
  public string $name='';
    public function render()
    {
        return view('livewire.test-liviwire');
    }
}
