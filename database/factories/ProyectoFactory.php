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
            'titulo' => fake()->sentence(3),
            'descripcion' => fake()->sentence(5),
            'etiquetas' => fake()->randomElement([
                'PHP, Laravel, MySQL',
                'Python, Django, PostgreSQL',
                'JavaScript, React, Node.js',
                'PHP, Vue, Tailwind',
            ]),
        ];
    }
}
