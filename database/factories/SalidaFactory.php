<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salida>
 */
class SalidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departamento = $this->faker->randomElement([
            'Gerencia Tecnologia',
            'Gerencia Comercial',
            'Gerencia Administrativa',
            'Gerencia Fuentes Hidricas',
        ]);
        return [
            //
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'entregado_a' => $this->faker->name(),
            'departamento' => $departamento,
            'cedula' => $this->faker->unique()->numerify('V########'),
            'vehicle_placa' => $this->faker->regexify('[A-Z]{3}[0-9]{3}'),
        ];
    }
}
