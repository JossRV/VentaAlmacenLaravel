<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genero'=>$this->faker->randomElement(['male', 'female']),
            'nombre'=>$this->faker->lastName(),
            'paterno'=>function(array $user){
                return $this->faker->name($user['genero']);
            },
            'puesto'=>$this->faker->randomElement(['Cajero','Encargado de Bodega/Almacen','Empleado Anaquel','Personal Limpieza'])
        ];
    }
}
