<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('Categories')->insert([
        [
        'category' => 'Collar'
       ],
       [
        'category' => 'Pendientes'
       ],[
        'category' => 'Pulsera'
       ],[
        'category' => 'Anillo'
       ],[
        'category' => 'Gemelos'
       ],
       [
        'category' => 'Brazalete'
       ],
       [
        'category' => 'Broche'
       ], 
    ]);
    }
}
