<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Salida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticuloSalida>
 */
class ArticuloSalidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'salida_id' => Salida::factory(),
            'material_id' => Material::factory(),
            'cantidad' => $this->faker->numberBetween(1,50),
        ];
    }
}
