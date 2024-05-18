<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tallas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $datos = [
                [
                    'id_talla' => 1,
                    'nombre_talla' => 'S'
                ]
            ];
    
            DB::table('tallas')->insert($datos);
        }
    }

