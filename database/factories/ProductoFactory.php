<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
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
                return $obj['producto'].".png";
            },
            'serial'=>$this->faker->randomNumber(7,true),
            'almacen'=>$this->faker->randomNumber(2,false),
            'ubicacion'=>function(array $obj){
                if($obj['producto']== 'Aceite'){
                    return 'Liquidos';
                }else if($obj['producto']=='Jabon Ace'){
                    return 'Jabones';
                }else if($obj['producto']=='Jabon Ariel'){
                    return 'Jabones';
                }else if($obj['producto']=='Sopa'){
                    return 'Pastas';
                }else if($obj['producto']=='Maruchans'){
                    return 'Pastas';
                }else if($obj['producto']=='Coca-Cola'){
                    return 'Refrescos';
                }
            }
        ];
    }
}
