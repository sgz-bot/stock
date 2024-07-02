<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
use App\Models\DroitAcces;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créez quelques utilisateurs
        $utilisateurs = Utilisateur::factory(10)->create();

        // Récupérer tous les droits d'accès
        $droitsAcces = DroitAcces::all();

        // Assigner les droits d'accès à chaque utilisateur
        foreach ($utilisateurs as $utilisateur) {
            // Assigner tous les droits d'accès à l'utilisateur
            $utilisateur->droitsAcces()->attach($droitsAcces);
        }
    }
}
