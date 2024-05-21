<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index(Request $request)
    {
        $carritos = Carrito::where('id_usuario_carrito',$request->id_usuario_carrito)->get();
        return view('Carrito.index', compact('carritos'));
    }
}
