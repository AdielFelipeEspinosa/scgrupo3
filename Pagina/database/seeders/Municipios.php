<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Municipios extends Seeder
{

    public function run(): void
    {
        $datos=[
            [
                'id_municipio'=>1,
                'nombre_municipio'=>'Popayan',
                'id_departamento_municipio'=>1
            ]
        ];

        DB::table('municipios')->insert($datos);
    }
}
