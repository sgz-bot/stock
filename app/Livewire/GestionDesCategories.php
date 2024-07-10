<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class GestionDesCategories extends Component
{

    public $designationNouvelleCategorie;
    public $tva1;
    public $tva2;
    public $tva3;
    public $tva4;
    public $categories;
    public $tvaChoisie;
    public $libelleCategorieSelectionner;
    public $libelleCategorieRenomme;
    public $libelleSousCategorie;
    public $categorieSelectionner;
    public $idSousCategorieASupp;

    public function mount()
    {
        $pharmacie = DB::table("pharmacies")->get();
        $this->categories = Categorie::all();
        $this->tva1 = $pharmacie->pluck('tva1')->first();
        $this->tva2 = $pharmacie->pluck('tva2')->first();
        $this->tva3 = $pharmacie->pluck('tva3')->first();
        $this->tva4 = $pharmacie->pluck('tva4')->first();
        $this->designationNouvelleCategorie = "";
        $this->tvaChoisie = $this->tva1;
        $this->libelleCategorieSelectionner = "";
        $this->libelleCategorieRenomme = "";
        $this->bb = "";
        $this->selection = false;
        $this->libelleSousCategorie = "";
        $this->categorieSelectionner = "";
        $this->idSousCategorieASupp = "";
    }

    public function enregistrerNouvelCategorie()
    {
        DB::table("categories")->insert([
            "libelle" => $this->designationNouvelleCategorie,
            "tauxTva" => $this->tvaChoisie
        ]);
        $this->designationNouvelleCategorie = "";
        $this->categories = Categorie::all();
    }


    public function ajouterSousCategorie()
    {
        if($this->categorieSelectionner)
        {
            DB::table("sous_categories")->insert([
                "libelle" => $this->libelleSousCategorie,
                "categorie_id" => $this->categorieSelectionner->id
            ]);

            $this->libelleSousCategorie = "";
        }

    }

    public function supprimerSousCategorie()
    {
        if($this->idSousCategorieASupp)
        {
            DB::table('sous_categories')->where('id', $this->idSousCategorieASupp)->delete();
        }

    }



    public function selectionnerCategorie($idCategorie)
    {

        // dd($this->tvaChoisie);
        $this->categorieSelectionner = Categorie::find($idCategorie);
        $this->libelleCategorieSelectionner = $this->categorieSelectionner->libelle;
        $this->tvaChoisie = $this->categorieSelectionner->tauxTVA;

        // dd($this->categorieSelectionner->sousCategories);

    }

    public function renommer()
    {
        DB::table("categories")
        ->where("libelle", $this->libelleCategorieSelectionner)
        ->update(["libelle" => $this->libelleCategorieRenomme]);

        $this->categories = Categorie::all();
        $this->libelleCategorieSelectionner = $this->libelleCategorieRenomme;
        $this->libelleCategorieRenomme = "";
    }

    public function supprimerCategorie()
    {
        DB::table('categories')->where('libelle', $this->libelleCategorieSelectionner)->delete();
        $this->libelleCategorieSelectionner = "";
        $this->categories = Categorie::all();
    }

    public function render()
    {
        return view('livewire.gestion-des-categories');
    }
}
