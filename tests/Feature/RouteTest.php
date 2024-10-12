<?php

namespace Tests\Feature;

use App\Models\Maquinaria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_access_maquinarias_index_route()
    {
        // Crear algunas maquinarias
        Maquinaria::factory()->count(3)->create();

        // Realizar una solicitud GET a la ruta de index de maquinarias
        $response = $this->get('/maquinarias');

        // Verificar que la respuesta sea exitosa y contenga maquinarias
        $response->assertStatus(200);
        $response->assertViewHas('maquinarias');
    }
}
