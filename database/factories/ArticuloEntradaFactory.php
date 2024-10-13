<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticuloEntrada>
 */
class ArticuloEntradaFactory extends Factory
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
            'entrada_id' => Entrada::factory(),
            'material_id' => Material::factory(),
            'cantidad' => $this->faker->numberBetween(1, 100),
        ];
    }
}
