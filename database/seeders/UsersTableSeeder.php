<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function user()
    {
        User::create([
            'name' => 'kawsar ahmed',
            'email' => 'kawsarahmed1512@gmail.com',
            'password' => Hash::make('123123'),
        ]);
    }

    public function run()
    {
        $this->user();

        foreach (range(1, 20) as $index) {
            User::create([
                'name' => fake()->name,
                'email' => fake()->unique()->safeEmail,
                'password' => Hash::make(fake()->password)
            ]);
        }
    }
}
