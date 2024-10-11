<?php

namespace Database\Factories;

use App\Models\Componente;
use App\Models\Maquinaria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Componente>
 */
class ComponenteFactory extends Factory
{
    protected $model = Componente::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'tiempo_de_vida' => $this->faker->numberBetween(100, 1000),
            'estado' => $this->faker->randomElement(['funcionando', 'mantenimiento', 'fuera_de_servicio']),
            'maquinaria_id' => Maquinaria::factory(), // Genera una maquinaria automáticamente
            'fecha_instalacion' => $this->faker->date(),
            'observaciones' => $this->faker->sentence(),
        ];
    }
}
