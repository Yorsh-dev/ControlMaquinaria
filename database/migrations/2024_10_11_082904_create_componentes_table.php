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
        Schema::create('componentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('tiempo_de_vida')->nullable(); // Tiempo de vida en horas o días
            $table->enum('estado', ['funcionando', 'mantenimiento', 'fuera_de_servicio'])->default('funcionando');
            $table->foreignId('maquinaria_id')->constrained('maquinarias')->onDelete('cascade'); // Relación con Maquinaria
            $table->date('fecha_instalacion')->nullable(); // Fecha de instalación
            $table->text('observaciones')->nullable(); // Observaciones adicionales
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentes');
    }
};
