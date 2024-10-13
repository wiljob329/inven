<?php

namespace Database\Factories;

use App\Models\Deposito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deposito>
 */
class DepositoFactory extends Factory
{
    protected $model = Deposito::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            //'name' => $this->faker->unique()->word() . ' Depósito',
            'name' => 'Deposito Libertador'
        ];
    }
}
