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
         'azienda' => fake() -> word(),
         'stazione_partenza' => fake()->sentence(2),
         'stazione_arrivo' => fake()->sentence(2),
         'ora_partenza' => fake() -> time(),
         'ora_arrivo' => fake() -> time(),
         'codice_treno' => fake()->randomNumber(5, false),
         'carozze_treno' => fake()->randomNumber(8,false),
         'in_orario' => fake()->boolean(),
         'cancellato' => fake()->boolean()
        ];
    }
}
