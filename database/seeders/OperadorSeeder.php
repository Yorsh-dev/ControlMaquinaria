<?php

namespace Database\Seeders;

use App\Models\Operador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Crear un operador predeterminado (invitado)
        Operador::create([
            'nombre' => 'Invitado',
            'apellido' => 'Generico',
            'email' => 'invitado@example.com',
            'telefono' => '123456789',
            'estado' => 'operativo', // Valor por defecto "operativo"
        ]);

        Operador::create([
            'nombre' => 'Carlos',
            'apellido' => 'Ramirez',
            'email' => 'carlos.ramirez@example.com',
            'telefono' => '987654321',
            'estado' => 'operativo',
        ]);
        Operador::create([
            'nombre' => 'Alfredo',
            'apellido' => 'Ochoa',
            'email' => 'Ochoa@gmail.com',
            'telefono' => '987987962',
            'estado' => 'operativo',
        ]);
    }
}
