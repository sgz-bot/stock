<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ParametreFinancier extends Component
{
    public $tva1;
    public $tva2;
    public $tva3;
    public $tva4;
    public $tva1Db;
    public $tva2Db;
    public $tva3Db;
    public $tva4Db;
    public $message;


    public function mount()
    {
        $pharmacie = DB::table("pharmacies")->get();
        $this->tva1 = $pharmacie->pluck('tva1')->first();
        $this->tva2 = $pharmacie->pluck('tva2')->first();
        $this->tva3 = $pharmacie->pluck('tva3')->first();
        $this->tva4 = $pharmacie->pluck('tva4')->first();

        $this->tva1Db = $this->tva1;
        $this->tva2Db = $this->tva2;
        $this->tva3Db = $this->tva3;
        $this->tva4Db = $this->tva4;

        $this->message = "";
    }

    public function enregistrer()
    {
        $modifier = DB::table("pharmacies")
        ->where("id", 1)
        ->update([
            "tva1" => $this->tva1Db,
            "tva2" => $this->tva2Db,
            "tva3" => $this->tva3Db,
            "tva4" => $this->tva4Db,
        ]);

        if($modifier)
        {
            $this->message = "Enregistrement effectué";
        }
    }

    public function render()
    {
        return view('livewire.parametre-financier');
    }
}
