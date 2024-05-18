<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'id_categoria' => 1,
                'nombre_categoria' => 'Deporte'
            ]
        ];

        DB::table('categorias')->insert($datos);
    }
    
}
