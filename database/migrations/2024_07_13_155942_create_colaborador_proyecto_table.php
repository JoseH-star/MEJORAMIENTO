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
        Schema::create('colaborador_proyecto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('colaborador_nif')->constrained('colaboradors');
            $table->foreignId('proyecto_codigo')->constrained('proyectos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colaborador_proyecto');
    }
};
