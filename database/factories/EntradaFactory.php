<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
{
    protected $model = Entrada::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'codigo_nota_entrega' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{6}'),
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'recibido_por' => $this->faker->name(),
            'proveedors_id' => Proveedor::factory(),
        ];
    }
}
