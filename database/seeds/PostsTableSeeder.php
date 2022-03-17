<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->words(4,true);
            $newPost->content = $faker->words(10,true);
            $newPost->slug = Str::slug($newPost->title,'-');
            $newPost->save();
        }
    }
}
