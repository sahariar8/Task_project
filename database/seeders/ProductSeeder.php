<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'iPhone 15', 'slug' => 'iphone-15', 'price' => 999],
            ['name' => 'Samsung Galaxy S24', 'slug' => 'samsung-galaxy-s24', 'price' => 899],
            ['name' => 'MacBook Pro', 'slug' => 'macbook-pro', 'price' => 1999],
        ]);
    }
}