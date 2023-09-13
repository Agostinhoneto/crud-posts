<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realText(50);
        return [
            'titulo' => $title,
            'subtitulo' => fn($attr) => \Str::slug($attr['titulo']),
            'conteudo' => fake()->realText(5000),
            'publicado' => fake()->boolean,
            'user_id' => 1
        ];
    }
}
