<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Colores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'id_color' => 1,
                'nombre_color' => 'Azul'
            ]
        ];

        DB::table('colores')->insert($datos);
    }
}
