<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductReview::insert([
            ['product_id' => 1, 'user_id' => 1, 'comment' => 'Amazing phone!', 'rating' => 5],
            ['product_id' => 2, 'user_id' => 2, 'comment' => 'Good value', 'rating' => 4],
            ['product_id' => 3, 'user_id' => 1, 'comment' => 'Very powerful laptop', 'rating' => 5],
        ]);
    }
}