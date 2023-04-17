<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Orders')->insert([
            [
                'total' => 78456,
                'user_id' => 1,
                'is_completed' => true,
            ],
            [
                'total' => 98161,
                'user_id' => 2,
                'is_completed' => false,
            ],
            [
                'total' => 61581,
                'user_id' => 3,
                'is_completed' => true,
            ],
            [
                'total' => 61610,
                'user_id' => 4,
                'is_completed' => false,
            ],
            [
                'total' => 35000,
                'user_id' => 5,
                'is_completed' => false,
            ],
        ]);
    }
}
