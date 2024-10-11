<?php

namespace Database\Seeders;

use App\Models\Maquinaria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaquinariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear una máquina
        Maquinaria::create([
            'nombre' => 'Excavadora CAT 320',
            'marca' => 'Caterpillar',
            'modelo' => '320',
            'serie' => 'CAT0320EJDZ12345',
            'tipo_combustible' => 'Diesel',
            'precio_por_hora' => 150.00,
            'estado' => 'operativa',
            'ubicacion_actual' => 'Lima',
            'horas_uso' => 1200,
            'operador_id' => 1 // ID del operador asignado
        ]);

        // Crear otra máquina
        Maquinaria::create([
            'nombre' => 'Cargador Frontal',
            'marca' => 'Komatsu',
            'modelo' => 'WA320',
            'serie' => 'KMTWA320DJ123456',
            'tipo_combustible' => 'Diesel',
            'precio_por_hora' => 200.00,
            'estado' => 'mantenimiento',
            'ubicacion_actual' => 'Arequipa',
            'horas_uso' => 800,
            'operador_id' => 2 // ID del operador asignado
        ]);
    }
}
