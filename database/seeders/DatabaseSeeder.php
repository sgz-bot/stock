<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Utilisateur;
use App\Models\Pharmacie;
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

        // creation de l'admin et assignation des droits



        $this->call([
            DroitAccesSeeder::class,
            UtilisateurSeeder::class,
        ]);

        // Création de l'admin et attribution de tous les droits
        $droitsAcces = DroitAcces::all();
        $utilisateur = Utilisateur::factory()->create([
            'nom' => 'Admin',
            'motDePasse' => '1234'
        ]);
        $utilisateur->droitsAcces()->attach($droitsAcces);

        Pharmacie::factory()->create();

    }
}
