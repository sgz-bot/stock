<?php

namespace App\Livewire;

use Livewire\Component;

class Categorie extends Component
{
    public $tva1;
    public $tva2;
    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.categorie');
    }
}
