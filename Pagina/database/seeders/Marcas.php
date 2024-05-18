<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Marcas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'id_marca' => 1,
                'nombre_marca' => 'Zara'
            ]
        ];

        DB::table('marcas')->insert($datos);
    }
}
