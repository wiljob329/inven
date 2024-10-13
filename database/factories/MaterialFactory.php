<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Deposito;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    protected $model = Material::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'descripcion' => $this->faker->sentence(),
            'cantidad' => $this->faker->numberBetween(20, 1000),
            'depositos_id' => Deposito::factory(),
            'categorias_id' => Categoria::factory(),
            'alerta' => $this->faker->numberBetween(10,20),
        ];
    }
}
