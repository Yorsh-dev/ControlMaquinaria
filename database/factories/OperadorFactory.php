<?php

namespace Database\Factories;

use App\Models\Operador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operador>
 */
class OperadorFactory extends Factory
{
    protected $model = Operador::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'estado' => $this->faker->randomElement(['operativo', 'fuera_servicio']),
        ];
    }
}
