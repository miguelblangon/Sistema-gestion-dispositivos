<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nombreEquipo'=>$this->faker->firstName(),
        'procesador'=>$this->faker->lastName(),
        'placaBase'=>$this->faker->firstName(),
        'discoDuro'=>$this->faker->lastName(),
        'sistemaOperativo'=>$this->faker->firstName(),
        'tipo'=> random_int(0,1)?'pc':'portatil',
        'usuarios_id'=> random_int(1,10),
        ];
    }
}
