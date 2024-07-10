<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacie>
 */
class PharmacieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => 'La Santé',
            'adresse' => 'Hoinmè-Fusion avenue de Djègan-Kpevi',
            'ville' => 'Porto-Novo',
            'codePostal' => $this->faker->postcode,
            'tel' => '+229 56 52 52 52',
            'fax' => $this->faker->phoneNumber,
            'email' => 'pharmacie@gmail.com',
            'banque' => $this->faker->bankAccountNumber,
            'tva1' => 31,
            'tva2' => 20,
            'tva3' => 0,
            'tva4' => 0,
        ];
    }
}
