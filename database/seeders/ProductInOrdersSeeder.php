<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductInOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_in_orders')->insert([
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'sub_total' => 50000
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 4,
                'sub_total' => 7890
            ],
            [
                'order_id' => 3,
                'product_id' => 4,
                'quantity' => 2,
                'sub_total' => 10000
            ],
            [
                'order_id' => 4,
                'product_id' => 7,
                'quantity' => 1,
                'sub_total' => 89000
            ],
            [
                'order_id' => 5,
                'product_id' => 4,
                'quantity' => 1,
                'sub_total' => 13900
            ],
        ]);
    }
}
