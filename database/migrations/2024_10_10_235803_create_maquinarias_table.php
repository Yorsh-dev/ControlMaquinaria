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
        Schema::create('maquinarias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('tipo_combustible');
            $table->decimal('precio_por_hora', 10, 2);
            $table->enum('estado', ['operativa', 'mantenimiento', 'fuera_servicio'])->default('operativa');
            $table->string('ubicacion')->nullable();
            $table->integer('horas_uso')->nullable();
            $table->foreignId('responsable_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinarias');
    }
};
