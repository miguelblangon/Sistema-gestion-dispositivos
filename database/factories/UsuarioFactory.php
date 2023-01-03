<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apellidos'=>$this->faker->lastName(),
            'documento'=>$this->faker->randomNumber(7).$this->faker->randomLetter() ,
            'documento_tipo'=>random_int(0,1)?'nif':'cif',
            'direccion'=>$this->faker->streetAddress() ,
            'cp'=>$this->faker->name(),
            'ciudad'=>$this->faker->city(),
            'telefono'=>$this->faker->phoneNumber(),
            'mail'=>$this->faker->unique()->safeEmail(),
        ];
    }
}
