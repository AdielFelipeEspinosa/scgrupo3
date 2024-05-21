<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('shop', compact('productos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        $tallas = Talla::all();
        $colores = Color::all();
        $categorias = Categoria::all();
        return view('Productos.create', compact('marcas', 'tallas', 'colores', 'categorias'));
    }

    public array $rules = [
        'nombre_producto' => 'required',
        'costo_producto' => 'required',
        'descripcion_producto' => 'required',
        'cantidad_producto' => 'required',
        'link' => 'required',
        'id_marca_producto' => 'required',
        'id_talla_producto' => 'required',
        'id_color_producto' => 'required', //Verificar si el campo de contraseña es el mismo
        'id_categoria_producto' => 'required'
    ];

    public function store(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $producto = new Producto();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->costo_producto = $request->costo_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->cantidad_producto = $request->cantidad_producto;
        $producto->link = $request->link;
        $producto->id_marca_producto = $request->id_marca_producto;
        $producto->id_talla_producto  = $request->id_talla_producto ;
        $producto->id_color_producto  = $request->id_color_producto ;
        $producto->id_categoria_producto  = $request->id_categoria_producto ;

        $producto->save();

        return redirect()->route('shop')->withSuccess('Producto Registrado Correctamente :D');
    }

    public function show(Request $request)
    {
        $producto = Producto::find($request->id_producto);
        return view('Productos.detalles', compact('producto'));
    }

    public function storeCarrito(Request $request)
    {
        $carrito = new Carrito();
        
        $carrito->id_usuario_carrito = $request->id_usuario_carrito;
        $carrito->id_producto_carrito = $request->id_producto_carrito;
        $carrito->cantidadproducto_carrito = $request->cantidadproducto_carrito;
        $carrito->registro_carrito = now();
        $carrito->save();

        return redirect()->route('shop')->withSuccess('Producto Registrado Correctamente :D');
    }



}
