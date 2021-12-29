<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array
     */
    public function definition()
    {
        
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'date_de_naissance'=> $this->faker->date(),
            'sexe'=>'Masculin',
            'statut_matrimonial'=>'marier',
            'adresse'=> $this->faker->address(),
            'telephone'=> $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),

        ];
    }
}
