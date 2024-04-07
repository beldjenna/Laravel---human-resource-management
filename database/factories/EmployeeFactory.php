<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cin' => $this->faker->numberBetween(10000000, 99999999),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'sexe' => $this->faker->randomElement(['homme', 'femme']),
            'date_nais' => $this->faker->date(),
            'situation_fam' => $this->faker->randomElement(['celebataire', 'marriee', 'divorcee']),
            'nb_enfants' => $this->faker->numberBetween(0, 5),
            'date_debcont' => $this->faker->date(),
            'date_fincont' => $this->faker->date(),
            'service' => $this->faker->word(),
            'adresse' => $this->faker->address(),
            'tel' => $this->faker->numerify('##########'),
            'email' => $this->faker->email(),
            'date_embauche' => $this->faker->date(),
            'nb_jourconge' => $this->faker->numberBetween(0, 30),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
