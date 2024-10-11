<?php

namespace Tests\Feature;

use App\Models\Maquinaria;
use App\Models\Operador;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OperadorTest extends TestCase
{
    use RefreshDatabase; // Esto se encarga de migrar antes de cada prueba

    /** @test */
    public function test_create_operador()
    {
        // Crear un nuevo operador
        $operador = Operador::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan.perez@example.com',
            'telefono' => '123456789',
            'estado' => 'operativo',
        ]);

        // Verificar que se creó correctamente
        $this->assertInstanceOf(Operador::class, $operador);
        $this->assertEquals('Juan', $operador->nombre);
        $this->assertEquals('operativo', $operador->estado);
    }
    /** @test */
    public function test_update_operador()
    {
        // Crear un operador
        $operador = Operador::factory()->create();

        // Actualizar su estado
        $operador->estado = 'fuera_servicio';
        $operador->save();

        // Verificar que se actualizó correctamente
        $this->assertEquals('fuera_servicio', $operador->estado);
    }
    /** @test */
    public function test_delete_operador()
    {
        // Crear un operador
        $operador = Operador::factory()->create();

        // Eliminar el operador
        $operador->delete();

        // Verificar que se eliminó
        $this->assertNull(Operador::find($operador->id));
    }
    /** @test */
    public function test_list_maquinarias_of_operador()
    {
        // Crear un operador
        $operador = Operador::factory()->create();

        // Crear algunas maquinarias asociadas a este operador
        $maquinaria1 = Maquinaria::factory()->create(['operador_id' => $operador->id]);
        $maquinaria2 = Maquinaria::factory()->create(['operador_id' => $operador->id]);

        // Verificar que el operador tiene dos maquinarias
        $this->assertCount(2, $operador->maquinarias);
    }

        /** @test */
    public function test_unique_email_operador()
    {
        // Crear un operador
        Operador::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan.perez@example.com',
            'telefono' => '123456789',
            'estado' => 'operativo',
        ]);

        // Intentar crear un operador con el mismo email
        $this->expectException(\Illuminate\Database\QueryException::class);

        Operador::create([
            'nombre' => 'Maria',
            'apellido' => 'Gómez',
            'email' => 'juan.perez@example.com',
            'telefono' => '987654321',
            'estado' => 'operativo',
        ]);
    }
    /** @test */
    public function test_operador_exists()
    {
        // Crear un operador
        $operador = Operador::factory()->create();

        // Verificar que el operador existe en la base de datos
        $this->assertDatabaseHas('operadores', [
            'id' => $operador->id,
            'nombre' => $operador->nombre,
        ]);
    }
}
