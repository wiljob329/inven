<?php

namespace Database\Seeders;

use App\Models\ArticuloEntrada;
use App\Models\ArticuloSalida;
use App\Models\Categoria;
use App\Models\Deposito;
use App\Models\Entrada;
use App\Models\Material;
use App\Models\Proveedor;
use App\Models\Salida;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Categoria::factory(10)->create();
        Deposito::factory()->create();

        Material::factory(50)->create();

        Proveedor::factory(20)->create();

        Entrada::factory(30)->create()->each(function($entradas){
            ArticuloEntrada::factory(rand(1,5))->create([
                'entrada_id' => $entradas->id
            ]);
        });
        
        Salida::factory(40)->create()->each(function($salidas){
            ArticuloSalida::factory(rand(1,3))->create([
                'salida_id' => $salidas->id,
            ]);
        });
    }
}
