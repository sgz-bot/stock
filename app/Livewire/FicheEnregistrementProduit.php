<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class FicheEnregistrementProduit extends Component
{
    public $codeArticle;
    public $designation;
    public $categories;
    public $idCategorie;


    public function mount()
    {
        $this->codeArticle = "";
        $this->designation = "";
        $this->categories = Categorie::all();
        dd($this->categories);
        $this->idCategorie = "";

    }

    public function enregistrer()
    {
        dd($this->codeArticle, $this->designation, $this->idCategorie);
    }



    public function render()
    {
        return view('livewire.fiche-enregistrement-produit');
    }
}
