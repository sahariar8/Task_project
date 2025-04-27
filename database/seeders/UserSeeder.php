<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password')],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password')],
        ]);
    }
}