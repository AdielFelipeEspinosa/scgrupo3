<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Departamentos::class,
            Municipios::class,
            Perfiles::class,
            Users::class,
            Marcas::class,
            Colores::class,
            Tallas:: class,
            Categorias::class,
            Productos::class
        ]);
    }
}
