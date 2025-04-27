<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert([
            ['grand_total' => 1099, 'shipping_cost' => 50, 'discount' => 100, 'user_id' => 1],
            ['grand_total' => 2099, 'shipping_cost' => 60, 'discount' => 150, 'user_id' => 2],
        ]);
    }
}