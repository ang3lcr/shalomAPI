<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductInCartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_in_carts')->insert([
            [
                'cart_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'sub_total' => 15000,
            ],
            [
                'cart_id' => 2,
                'product_id' => 5,
                'quantity' => 5,
                'sub_total' => 14000,
            ],
            [
                'cart_id' => 3,
                'product_id' => 4,
                'quantity' => 1,
                'sub_total' => 15800,
            ],
            [
                'cart_id' => 4,
                'product_id' => 7,
                'quantity' => 3,
                'sub_total' => 12500,
            ],
            [
                'cart_id' => 5,
                'product_id' => 3,
                'quantity' => 6,
                'sub_total' => 13000,
            ],
        ]);
    }
}
