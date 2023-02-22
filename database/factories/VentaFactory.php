<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto'=>$this->faker->randomElement(['Aceite','Jabon Ace','Jabon Ariel','Sopa','Maruchans','Coca-Cola']),
            'imagen'=>function(array $obj){
                return $obj['producto'];
            },
            'vendido'=>$this->faker->date(),
            'usuario'=>$this->faker->name(),
            'precio'=>$this->faker->randomElement(['22.5','10.4','11','35','30','25','10']),
            'serial'=>$this->faker->randomNumber(7,true),
        ];
    }
}
