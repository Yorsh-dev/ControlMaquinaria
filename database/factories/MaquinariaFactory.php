<?php

namespace Database\Factories;

use App\Models\Maquinaria;
use App\Models\Operador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maquinaria>
 */
class MaquinariaFactory extends Factory
{
    protected $model = Maquinaria::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'marca' => $this->faker->word,
            'modelo' => $this->faker->word,
            'serie' => $this->faker->word,
            'tipo_combustible' => $this->faker->randomElement(['Diesel', 'Gasolina']),
            'precio_por_hora' => $this->faker->randomFloat(2, 50, 200),
            'estado' => $this->faker->randomElement(['operativa', 'mantenimiento', 'fuera_servicio']),
            'ubicacion_actual' => $this->faker->word,
            'horas_uso' => $this->faker->numberBetween(0, 5000),
            'operador_id' => Operador::factory(), // Asegúrate de tener un factory para Operador
        ];
    }
}
