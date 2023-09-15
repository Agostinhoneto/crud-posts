<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(20)->create()->each(function (Post $post) {
            $post->categories()->attach(Category::factory()->createOne());
        });
    }
}
