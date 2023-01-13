<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'procedimiento'=> $this->faker->firstName(),
            'pieza'=> $this->faker->lastName(),
            'descripcion'=> $this->faker->firstName(),
            'equipos_id'=> random_int(1,20),

        ];
    }
}
