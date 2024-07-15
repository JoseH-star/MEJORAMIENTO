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
        Schema::create('viaje_destino', function (Blueprint $table) {
            $table->id();
            $table->foreignId('viaje_codigo')->constrained('viajes');
            $table->foreignId('destino_codigo')->constrained('destinos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viaje_destino');
    }
};
