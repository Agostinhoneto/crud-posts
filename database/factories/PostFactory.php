<?php

namespace Database\Factories;

use App\Models\Author;
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
        return [
            'title' => fake()->unique()->words(20, true),
            'slug' => fn($attr) => \Str::slug($attr['title']),
            'published' => fake()->boolean(90),
            'content' => fake()->realText(5000),
            'author_id' => Author::factory(),
        ];
    }
}
