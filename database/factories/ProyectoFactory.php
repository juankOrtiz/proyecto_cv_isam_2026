<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Aca defino cual es la logica para poblar cada campo de mi tabla proyectos
            'titulo' => fake()->sentence(3),
            'descripcion' => fake()->sentence(5),
        ];
    }
}
