<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articulo_entradas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entradas_id')->constrained()->cascadeOnDelete();
            $table->foreignId('materials_id')->constrained()->cascadeOnDelete();
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo_entradas');
    }
};
