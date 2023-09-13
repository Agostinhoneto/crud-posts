<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(20)->create([
            'user_id' => UserFactory::factory(),
            'title' => fake()->unique()->words(5, true),
            'subtitulo' => fn($attr) => \Str::slug($attr['titulo']),
            'publicado' => true,
            'conteudo' => fake()->text(80),
        ]);
    }
}
