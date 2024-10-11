<?php

namespace Database\Seeders;

use App\Models\Componente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Componentes para la Maquinaria 1
        Componente::create([
            'nombre' => 'Motor principal',
            'tiempo_de_vida' => 5000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 1, // ID de la maquinaria 1
            'fecha_instalacion' => now(),
        ]);

        Componente::create([
            'nombre' => 'Filtro de aire',
            'tiempo_de_vida' => 1000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 1, // ID de la maquinaria 1
            'fecha_instalacion' => now()->subMonths(2), // Instalado hace 2 meses
        ]);

        Componente::create([
            'nombre' => 'Cinturón de seguridad',
            'tiempo_de_vida' => 20000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 1, // ID de la maquinaria 1
            'fecha_instalacion' => now()->subYears(1), // Instalado hace 1 año
        ]);

        // Componentes para la Maquinaria 2
        Componente::create([
            'nombre' => 'Sistema hidráulico',
            'tiempo_de_vida' => 7000, // en horas
            'estado' => 'mantenimiento',
            'maquinaria_id' => 2, // ID de la maquinaria 2
            'fecha_instalacion' => now(),
        ]);

        Componente::create([
            'nombre' => 'Neumático delantero derecho',
            'tiempo_de_vida' => 3000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 2, // ID de la maquinaria 2
            'fecha_instalacion' => now()->subMonths(6), // Instalado hace 6 meses
        ]);

        Componente::create([
            'nombre' => 'Sistema de frenos',
            'tiempo_de_vida' => 15000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 2, // ID de la maquinaria 2
            'fecha_instalacion' => now()->subYears(2), // Instalado hace 2 años
        ]);

        Componente::create([
            'nombre' => 'Batería',
            'tiempo_de_vida' => 4000, // en horas
            'estado' => 'funcionando',
            'maquinaria_id' => 2, // ID de la maquinaria 2
            'fecha_instalacion' => now()->subMonths(8), // Instalado hace 8 meses
        ]);
    }
}
