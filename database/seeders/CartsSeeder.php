<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Carts')->insert([
           [
            'user_id' => 1,
            'total' => 65000
           ],
           [
            'user_id' => 2,
            'total' => 15000
           ],
           [
            'user_id' => 3,
            'total' => 5000
           ],
           [
            'user_id' => 4,
            'total' => 15000
           ],
           [
            'user_id' => 5,
            'total' => 35000
           ],
           
        ]);
    }
}
