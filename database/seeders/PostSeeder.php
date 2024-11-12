<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->content = $faker->paragraphs(3, true);
            $post->description = $faker->paragraph();
            $post->author = $faker->name();
            $post->save();
        }
    }
}