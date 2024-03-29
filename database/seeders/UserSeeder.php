<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Antonio Gongora Garcia',
            'email' => 'antonio.gongora1491@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        \App\Models\User::factory(99)->create();

    }
}
