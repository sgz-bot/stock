<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Utilisateur;
use App\Models\DroitAcces;

class GestionDesDroits extends Component
{
    public $nom;
    public $admin;
    public $message;
    public $messageAdmin;
    public $messageErreur;
    public $motDePasse;
    public $utilisateurs;
    public $ancienMotDePasseAdmin;
    public $nouveauMotDePasseAdmin;
    public $droitsAcces;
    public $autorisations;
    public $utilisateurDroitAcces;

    public function mount() {
        $this->utilisateurs = Utilisateur::all();
        $this->admin = $this->utilisateurs->firstWhere('nom', 'Admin');
        $this->droitsAcces = [];
        $this->autorisations = [];

        foreach($this->admin->droitsAcces as $droitAcces)
        {
            $this->droitsAcces[] = $droitAcces->designation;
        }

        foreach($this->admin->droitsAcces as $droitAcces)
        {
            if($droitAcces->pivot->statut)
            {
                $this->autorisations[] = $droitAcces->designation;
            }
        }

        // dd($this->autorisations);

        $this->messageErreur = "";
        $this->nom = "";
        $this->motDePasse = "";
        $this->message = "";
        $this->messageAdmin = "";
        $this->ancienMotDePasseAdmin = "";
        $this->nouveauMotDePasseAdmin = "";
    }


    public function ajouterUtilisateur() {
        // création du nouvel utilisateur
        $insere = DB::table('utilisateurs')->insert([
            'nom' => $this->nom,
            'motDePasse' => $this->motDePasse
        ]);

        // Je reinitialise la collection utilisateurs
        $this->utilisateurs = Utilisateur::all();

        // récupération du nouvel utilisateur et assignation des droits
        $nouvelUtilisateur = $this->utilisateurs->last();
        $nouvelUtilisateur->droitsAcces()->attach($this->droitsAcces);


        if($insere) {
            $this->message = "enregistrement effectué";
            $this->nom = "";
            $this->motDePasse = "";
        }
    }


    public function changerMotDePasseAdmin() {

        if($this->ancienMotDePasseAdmin != "" && $this->nouveauMotDePasseAdmin != "") {

            if($this->ancienMotDePasseAdmin == $this->admin->motDePasse) {
                DB::table('utilisateurs')
                    ->where('nom', "Admin")
                    ->update(['motDePasse' => $this->nouveauMotDePasseAdmin]);
                $this->messageAdmin = "Mise à jour efffectué";
                $this->nouveauMotDePasseAdmin = "";
                $this->ancienMotDePasseAdmin = "";
            } else {
                $this->messageAdmin = "Motde passe incorrecte";
            }
        } else {
            $this->messageAdmin = "L'un des champs est vide";
        }
    }

    public function render()
    {
        return view('livewire.gestion-des-droits');
    }
}
