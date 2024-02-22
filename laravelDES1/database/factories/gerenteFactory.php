<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\gerente>
 */
class gerenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Definimos el tipo de dato aleatorio que nos va a generar esta
        //Factoria de datos
        return [
            'edad'=>fake()->numberBetween(1,120),
            'nombre'=> fake()->name(),
            'sueldo'=>fake()->numberBetween(1000,12000),
            'fchNacimiento'=>fake()->date(),
            //
        ];
    }
}
