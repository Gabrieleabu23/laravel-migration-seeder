<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
         'azienda' => fake() -> company(),
         'stazione_partenza' => fake()->city(),
         'stazione_arrivo' => fake()->city(),
         'ora_partenza' => fake() -> dateTimeBetween('0 week', '+1 week'),
         'ora_arrivo' => fake() -> dateTimeBetween('0 week', '+1 week'),
         'codice_treno' => fake()->unique()->numerify('treno-####'),
         'carozze_treno' => fake()->numberBetween(5,20),
         'in_orario' => fake()->boolean(),
         'cancellato' => fake()->boolean()
        ];
    }
}
