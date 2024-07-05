<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Categorie extends Component
{
    public $designationNouvelleCategorie;
    public $tva1;
    public $tva2;
    public $tva3;
    public $tva4;
    public $tvaChoisie;

    public function mount()
    {
        $pharmacie = DB::table("pharmacies")->get();
        $this->tva1 = $pharmacie->pluck('tva1')->first();
        $this->tva2 = $pharmacie->pluck('tva2')->first();
        $this->tva3 = $pharmacie->pluck('tva3')->first();
        $this->tva4 = $pharmacie->pluck('tva4')->first();
        $this->designationNouvelleCategorie = "";
        $this->tvaChoisie = "";
    }

    public function enregistrerNouvelCategorie()
    {
        // DB::table("categories")->insert([
        //     ""
        // ]);
    }

    public function tva1f()
    {
        $this->tvaChoisie = $this->tva1;
    }

    public function render()
    {
        return view('livewire.categorie');
    }
}
