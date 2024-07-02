<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DroitAcces;


class DroitAccesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $droits = [
            'Lire les articles',
            'Écrire des articles',
            'Modifier les articles',
            'Supprimer les articles',
            'Gérer les utilisateurs',
            'Accéder au tableau de bord',
            // Ajoutez d'autres droits d'accès ici
        ];

        // Insérer les droits d'accès dans la base de données
        foreach ($droits as $droit) {
            DroitAcces::create(['designation' => $droit]);
        }
    }
}
