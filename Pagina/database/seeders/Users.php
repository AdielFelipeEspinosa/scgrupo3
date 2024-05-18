<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    public function run(): void
    {
        $datos = [
            [
                'id_usuario' => 1,
                'login_usuario' => 'Pipe',
                'nombre_usuario' => 'Adiel Felipe',
                'email_usuario' => 'adiel@example.com',
                'celular_usuario' => '3117159040',
                'direccion_usuario' => 'Cra 15',
                'password' => Hash::make('123'),
                'registro_usuario' => now(),
                'id_municipio_usuario' => 1,
                'id_perfil_usuario' => 1
            ]
        ];

        DB::table('users')->insert($datos);
    }
}
