<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Departamentos extends Seeder
{
    public function run(): void
    {
        $datos = [
            [
                'id_departamento' => 1,
                'nombre_departamento' => 'Cauca'
            ]
        ];

        DB::table('departamentos')->insert($datos);
    }
}
