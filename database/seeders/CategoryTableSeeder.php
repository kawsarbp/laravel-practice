<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $index) {
            $name = fake()->name;
            Category::create([
                'user_id' => rand(1, 21),
                'name' => $name,
                'slug' => strtolower(str_replace(' ', '-', $name)),
                'status' => $this->randStatus()
            ]);
        }
    }

    public function randStatus()
    {
        $status = ['active'=>'active','inactive'=>'inactive'];
        return array_rand($status);
    }
}
