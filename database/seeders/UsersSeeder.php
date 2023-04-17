<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Users')->insert([
            [
                'username' => 'Angel Cortes',
                'email' => 'angel@gmail.com',
                'password' => '1234',
                'address' => 'Revolucion 425 Colonia Centro',
                'phone' => '44879012'
            ],
            [
                'username' => 'Martin Gutierrez',
                'email' => 'martin@gmail.com',
                'password' => 'hola123',
                'address' => 'Apizaco 390 Tlaxcala',
                'phone' => '444569087'
            ],
            [
                'username' => 'Alejandro Gutierrez',
                'email' => 'alex@gmail.com',
                'password' => '0923',
                'address' => 'Apizaco 390 Tlaxcala',
                'phone' => '45908171'
            ],
            [
                'username' => 'Isaac Vega',
                'email' => 'isaac@hotmail.com',
                'password' => 'adios2530',
                'address' => 'El realito 654 Colonia Pedregal',
                'phone' => '44390716'
            ],
            [
                'username' => 'Luis Alejandro',
                'email' => 'alejandro@outlook.com',
                'password' => 'mypassword123',
                'address' => 'Genrales 121 Colonia Centro Apizaco',
                'phone' => '44906518'
            ],
        ]);
    }
}
