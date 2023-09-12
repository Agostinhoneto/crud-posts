<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'titulo' => 'teste',
            'subtitulo' => 'teste de subtitulo',
            'publicado' => 1,
            'conteudo' => 'teste xxcxccxcxdffdfd'
        ]);
    }
}
