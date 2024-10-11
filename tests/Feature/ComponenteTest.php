<?php

namespace Tests\Feature;

use App\Models\Componente;
use App\Models\Maquinaria;
use App\Models\Operador;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComponenteTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function test_create_componente()
    {
        // Crear un operador
        $operador = Operador::factory()->create();

        // Crear una maquinaria asociada al operador
        $maquinaria = Maquinaria::factory()->create(['operador_id' => $operador->id]);

        // Crear un componente asociado a la maquinaria
        $componente = Componente::create([
            'nombre' => 'Motor',
            'tiempo_de_vida' => 1000,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        // Verificar que se creó correctamente
        $this->assertInstanceOf(Componente::class, $componente);
        $this->assertEquals('Motor', $componente->nombre);
        $this->assertEquals(1000, $componente->tiempo_de_vida);
    }
    /** @test */
    public function test_update_componente()
    {
        $componente = Componente::factory()->create([
            'estado' => 'funcionando',
        ]);

        // Actualiza el estado
        $componente->estado = 'mantenimiento';
        $componente->save();

        $this->assertEquals('mantenimiento', $componente->estado);
    }
    /** @test */
    public function test_delete_componente()
    {
        $componente = Componente::factory()->create();

        // Elimina el componente
        $componente->delete();

        $this->assertNull(Componente::find($componente->id));
    }
    /** @test */
    public function test_componente_belongs_to_maquinaria()
    {
        $maquinaria = Maquinaria::factory()->create();
        $componente = Componente::create([
            'nombre' => 'Bujía',
            'tiempo_de_vida' => 200,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        $this->assertEquals($maquinaria->id, $componente->maquinaria_id);
    }
    /** @test */
    public function test_componente_exists()
    {
        // Crear un operador y una maquinaria
        $operador = Operador::factory()->create();
        $maquinaria = Maquinaria::factory()->create(['operador_id' => $operador->id]);

        // Crear un componente
        $componente = Componente::create([
            'nombre' => 'Motor',
            'tiempo_de_vida' => 1000,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        // Verificar que el componente existe en la base de datos
        $this->assertDatabaseHas('componentes', [
            'id' => $componente->id,
            'nombre' => $componente->nombre,
        ]);
    }
    /** @test */
    public function test_unique_name_componente()
    {
        // Crear un operador y una maquinaria
        $operador = Operador::factory()->create();
        $maquinaria = Maquinaria::factory()->create(['operador_id' => $operador->id]);

        // Crear un componente
        Componente::create([
            'nombre' => 'Motor',
            'tiempo_de_vida' => 1000,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        // Intentar crear un componente con el mismo nombre
        $this->expectException(\Illuminate\Database\QueryException::class);

        Componente::create([
            'nombre' => 'Motor',
            'tiempo_de_vida' => 900,
            'estado' => 'mantenimiento',
            'maquinaria_id' => $maquinaria->id,
        ]);
    }
    /** @test */
    public function test_list_componentes_of_maquinaria()
    {
        // Crear un operador y una maquinaria
        $operador = Operador::factory()->create();
        $maquinaria = Maquinaria::factory()->create(['operador_id' => $operador->id]);

        // Crear algunos componentes asociados a esta maquinaria
        $componente1 = Componente::create([
            'nombre' => 'Motor',
            'tiempo_de_vida' => 1000,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        $componente2 = Componente::create([
            'nombre' => 'Transmisión',
            'tiempo_de_vida' => 800,
            'estado' => 'funcionando',
            'maquinaria_id' => $maquinaria->id,
        ]);

        // Verificar que la maquinaria tiene dos componentes
        $this->assertCount(2, $maquinaria->componentes);
    }
}
