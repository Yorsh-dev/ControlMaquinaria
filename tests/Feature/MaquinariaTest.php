<?php

namespace Tests\Feature;

use App\Models\Maquinaria;
use App\Models\Operador;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaquinariaTest extends TestCase
{
    use RefreshDatabase; // Esto se encarga de migrar antes de cada prueba

    /** @test */
    public function test_create_maquinaria()
    {
        $operador = Operador::factory()->create();
        // Crear una nueva instancia de maquinaria
        $maquinaria = Maquinaria::create([
            'nombre' => 'Excavadora',
            'marca' => 'CAT',
            'modelo' => '320D',
            'serie' => 'EXC320123',
            'tipo_combustible' => 'Diesel',
            'precio_por_hora' => 150.00,
            'estado' => 'operativa',
            'ubicacion_actual' => 'Sitio A',
            'horas_uso' => 1200,
            'operador_id' => $operador->id // Asigna el ID del operador creado
        ]);

        // Verificar que se creó correctamente
        $this->assertInstanceOf(Maquinaria::class, $maquinaria);
        $this->assertEquals('Excavadora', $maquinaria->nombre);
        $this->assertEquals(150.00, $maquinaria->precio_por_hora);
    }

    public function test_update_maquinaria()
    {
        // Crea un operador para asociar a la maquinaria
    $operador = Operador::factory()->create();

    // Crea una maquinaria
    $maquinaria = Maquinaria::create([
        'nombre' => 'Excavadora',
        'marca' => 'CAT',
        'modelo' => '320D',
        'serie' => 'EXC320123',
        'tipo_combustible' => 'Diesel',
        'precio_por_hora' => 150.00,
        'estado' => 'operativa',
        'ubicacion_actual' => 'Sitio A',
        'horas_uso' => 1200,
        'operador_id' => $operador->id,
    ]);

    // Actualizar un registro existente
    $maquinaria->estado = 'mantenimiento';
    $maquinaria->save();

    // Verificar que se actualizó correctamente
    $this->assertEquals('mantenimiento', $maquinaria->estado);
    }

    public function test_delete_maquinaria()
    {
        // Crea un operador para asociar a la maquinaria
    $operador = Operador::factory()->create();

    // Crea una maquinaria
    $maquinaria = Maquinaria::create([
        'nombre' => 'Excavadora',
        'marca' => 'CAT',
        'modelo' => '320D',
        'serie' => 'EXC320123',
        'tipo_combustible' => 'Diesel',
        'precio_por_hora' => 150.00,
        'estado' => 'operativa',
        'ubicacion_actual' => 'Sitio A',
        'horas_uso' => 1200,
        'operador_id' => $operador->id,
    ]);

    // Eliminar el registro
    $maquinaria->delete();

    // Verificar que se eliminó
    $this->assertNull(Maquinaria::find($maquinaria->id));
    }
    public function test_can_create_maquinaria()
{
    // Crea un operador para asociar a la maquinaria
    $operador = Operador::factory()->create();

    // Crea una maquinaria usando el factory
    $maquinaria = Maquinaria::factory()->create([
        'operador_id' => $operador->id,
    ]);

    // Verifica que la maquinaria se haya creado en la base de datos
    $this->assertDatabaseHas('maquinarias', [
        'nombre' => $maquinaria->nombre,
        'marca' => $maquinaria->marca,
        'modelo' => $maquinaria->modelo,
        'serie' => $maquinaria->serie,
    ]);
}
}
