<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Electronics', 'slug' => 'electronics', 'parent_id' => null],
            ['name' => 'Mobile Phones', 'slug' => 'mobile-phones', 'parent_id' => 1],
            ['name' => 'Laptops', 'slug' => 'laptops', 'parent_id' => 1],
        ]);
    }
}