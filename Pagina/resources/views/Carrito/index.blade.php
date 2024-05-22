@extends('layouts.include')

@section('content')

<style>
    .producto {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
        display: flex; /* Usamos flexbox para controlar el diseño */
        align-items: center; /* Centramos verticalmente los elementos */
        margin-left: 20px; /* Movemos los productos un poco a la izquierda */
    }

    .producto img {
        max-width: 100px; /* Establecemos un ancho máximo para la imagen */
        height: auto;
        margin-right: 20px; /* Agregamos un margen a la derecha para separar la imagen del texto */
    }

    .producto-info {
        flex-grow: 1; /* El contenido de la información del producto se expandirá para ocupar el espacio restante */
    }

    #total {
        margin-top: 20px; /* Añadimos un margen superior al total */
        font-weight: bold; /* Establecemos negrita para el total */
        font-size: 24px; /* Ajustamos el tamaño del texto del total */
        margin-left: 20px; /* Movemos el total a la izquierda */
    }

    #boton-pagar {
        margin-top: 20px; /* Agregamos un margen superior al botón */
    }
</style>

@foreach ($carritos as $carrito)

<div class="producto">
    <img src="{{ $carrito->producto->link }}" alt="Imagen del Producto">
    <div class="producto-info">
        <h2>{{ $carrito->producto->nombre_producto }}</h2>
        <p>Precio: ${{ $carrito->producto->costo_producto }}</p>
        <p>Cantidad: <input type="number" value="{{ $carrito->cantidadproducto_carrito }}" min="1"></p>
    </div>
</div>

@endforeach

<!-- Calcular total -->
@php
    $total = 0; // Inicializamos el total en cero
    foreach ($carritos as $carrito) {
        $total += $carrito->producto->costo_producto * $carrito->cantidadproducto_carrito; // Sumamos el costo total de cada producto
}
@endphp

<div id="total">Total: ${{ $total }}</div>

<!-- Botón Pagar -->
<button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Pagar</button>

@endsection