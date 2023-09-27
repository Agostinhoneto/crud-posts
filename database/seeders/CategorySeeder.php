<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'title' => 'Web Design',
                'slug' => 'web-design'
            ],
            [
                'title' => 'Web Programming',
                'slug' => 'web-web-programming'
            ],
            [
                'title' => 'Internet',
                'slug' => 'internet'
            ],
            [
                'title' => 'Social Marketing',
                'slug' => 'social-marketing'
            ],
            [
                'title' => 'Photography',
                'slug' => 'photography'
            ],
        ]);

        /*
        // update the posts data
        for ($post_id = 1; $post_id <= 10; $post_id++)
        {
            $category_id = rand(1, 5);

            DB::table('posts')
                ->where('id', $post_id)
                ->update(['category_id' => $category_id]);
        }
        */
    }
}
