<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrarProducto()
    {
        $productos = Producto::all();
        return view('shop', compact('productos'));
    }

    public function index()
    {
        $marcas = Marca::all();
        $tallas = Talla::all();
        $colores = Color::all();
        $categorias = Categoria::all();
        return view('Productos.create', compact('marcas','tallas','colores','categorias'));
    }
}