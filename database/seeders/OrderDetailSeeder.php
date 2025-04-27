<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderDetail::insert([
            ['product_id' => 1, 'order_id' => 1, 'unit_price' => 999, 'quantity' => 1],
            ['product_id' => 2, 'order_id' => 1, 'unit_price' => 899, 'quantity' => 2],
            ['product_id' => 3, 'order_id' => 2, 'unit_price' => 1999, 'quantity' => 1],
        ]);
    }
}