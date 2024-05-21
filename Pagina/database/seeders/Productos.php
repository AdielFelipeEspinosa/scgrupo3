<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'id_producto' => 1,
                'nombre_producto' => 'Buso',
                'costo_producto' => 100,
                'descripcion_producto' => 'No te compliques',
                'cantidad_producto' => 5,
                'link' => "https://estampadosdreamagine.com.co/wp-content/uploads/2021/03/NASA-3.jpg",
                'id_marca_producto' => 1,
                'id_talla_producto' => 1,
                'id_color_producto' => 1,
                'id_categoria_producto' => 1
            ],
            [
                'id_producto' => 2,
                'nombre_producto' => 'Saco',
                'costo_producto' => 100,
                'descripcion_producto' => 'No te compliques',
                'cantidad_producto' => 5,
                'link' => "https://www.compranet.com.co/24605-large_default/gildan-buso-sencillo-talla-xl-poliester-de-279-grs-gris-jaspel.jpg",
                'id_marca_producto' => 1,
                'id_talla_producto' => 1,
                'id_color_producto' => 1,
                'id_categoria_producto' => 1
            ],
            [
                'id_producto' => 3,
                'nombre_producto' => 'Zapato',
                'costo_producto' => 100,
                'descripcion_producto' => 'No te compliques',
                'cantidad_producto' => 5,
                'link' => "https://img.freepik.com/vector-premium/dibujo-zapato-zapato-amarillo_410516-79247.jpg",
                'id_marca_producto' => 1,
                'id_talla_producto' => 1,
                'id_color_producto' => 1,
                'id_categoria_producto' => 1
            ]
        ];

        DB::table('productos')->insert($datos);
    }
}
