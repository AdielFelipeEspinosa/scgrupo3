<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Perfiles extends Seeder
{

    public function run(): void
    {
        $datos = [
            [
                'id_perfil' => 1,
                'nombre_perfil' => 'Admin'
            ],

            [
                'id_perfil' => 2,
                'nombre_perfil' => 'Cliente'
            ],
        ];

        DB::table('perfiles')->insert($datos);
    }
}
