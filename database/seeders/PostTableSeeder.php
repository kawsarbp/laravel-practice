<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1,30) as $index)
        {
            $name = $faker->name;
            Post::create([
                'user_id' => rand(1,21),
                'category_id' => rand(1,20),
                'title' => $name,
                'slug' => strtolower(str_replace(' ','-',$name)),
                'description' => $faker->text,
                'photo' => $faker->imageUrl,
                'status' => 'active',

            ]);
        }
    }
}
