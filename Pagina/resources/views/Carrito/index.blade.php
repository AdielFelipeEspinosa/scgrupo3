@extends('layouts.include')
@section('content')

@foreach ($carritos as $carrito)

<li>
    {{ $carrito->producto->nombre_producto }} - Cantidad: {{ $carrito->cantidadproducto_carrito }}
</li>

@endforeach
@endsection