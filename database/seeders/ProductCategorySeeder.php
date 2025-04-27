<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::where('slug', 'iphone-15')->first()->categories()->attach([1, 2]);
        Product::where('slug', 'samsung-galaxy-s24')->first()->categories()->attach([1, 2]);
        Product::where('slug', 'macbook-pro')->first()->categories()->attach([1, 3]);
    }
}