<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilisateur;
use App\Models\DroitAcces;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UtilisateurDroitAcces>
 */
class UtilisateurDroitAccesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'statut' => $this->faker->boolean,
            'droit_acces_id' => DroitAcces::all()->random()->id,
            'utilisateur_id' => Utilisateur::all()->random()->id,
        ];
    }
}
