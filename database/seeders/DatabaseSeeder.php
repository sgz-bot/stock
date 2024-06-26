<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Utilisateur;
use App\Models\DroitAcces;
use App\Models\UtilisateurDroitAcces;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Création du compte administrateur
        $admin = Utilisateur::factory()->create([
            'nom' => 'Admin',
            'motDePasse' => Hash::make('passwordAdmin'),
        ]);

        //Création des droits d'accès
        $droitAccesProduits = DroitAcces::factory()->create([
            'designation' => 'Accès aux produits',
        ]);

        $droitAccesFournisseurs = DroitAcces::factory()->create([
            'designation' => 'Accès aux fournisseurs',
        ]);

        $droitAccesVentes = DroitAcces::factory()->create([
            'designation' => 'Accès aux ventes',
        ]);

        $droitAccesGererStock = DroitAcces::factory()->create([
            'designation' => 'Gérer le stock',
        ]);

        $droitAccesModifierSuppProd = DroitAcces::factory()->create([
            'designation' => 'modifier / supprimer produits',
        ]);

        //Assignation de tous les droits à l'admin
        UtilisateurDroitAcces::factory()->create([
            'statut' => true,
            'utilisateur_id' => $admin->id,
            'droit_acces_id' => $droitAccesProduits->id,
        ]);

        UtilisateurDroitAcces::factory()->create([
            'statut' => true,
            'utilisateur_id' => $admin->id,
            'droit_acces_id' => $droitAccesFournisseurs->id,
        ]);

        UtilisateurDroitAcces::factory()->create([
            'statut' => true,
            'utilisateur_id' => $admin->id,
            'droit_acces_id' => $droitAccesVentes->id,

        ]);

        UtilisateurDroitAcces::factory()->create([
            'statut' => true,
            'utilisateur_id' => $admin->id,
            'droit_acces_id' => $droitAccesGererStock->id,

        ]);

        UtilisateurDroitAcces::factory()->create([
            'statut' => true,
            'utilisateur_id' => $admin->id,
            'droit_acces_id' => $droitAccesModifierSuppProd->id,
        ]);

    }
}
