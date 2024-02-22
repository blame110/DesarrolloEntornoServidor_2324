<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\discoteca>
 */
class discotecaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capacidad'=>$this->faker->numberBetween(100,500),
            'nombre'=>$this->faker->name,
            'precio'=>$this->faker->numberBetween(8,2000),
            'gerente_id'=>fake()->numberBetween(1,10),
        ];
    }
}
