@extends('layouts.include')
@section('content')

@php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
@endphp

<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{$producto->link}}" alt="Card image cap" id="product-detail">
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{$producto->nombre_producto}}</h1>
                        <p class="h3 py-2">$ {{$producto->costo_producto}}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Descripcion: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$producto->descripcion_producto}}</strong></p>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Marca: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$producto->marca->nombre_marca}}</strong></p>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Color: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$producto->color->nombre_color}}</strong></p>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Categoria: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$producto->categoria->nombre_categoria}}</strong></p>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Talla Disponible: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$producto->talla->nombre_talla}}</strong></p>
                            </li>
                        </ul>

                        <form action="{{ route('carritoPost') }}" method="POST">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item">Size :
                                            <input type="hidden" name="product-size" id="product-size" value="S">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Cantidad
                                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col d-grid">
                                @csrf
                                
                                @guest
                                <button type="" class="btn btn-success btn-lg" name="submit" value="addtocard">Inicia Sesion</button>
                                @else

                                @php
                                $id_usuario=(Auth::user()->id_usuario);
                                $user=User::find($id_usuario);
                                @endphp

                                <input type="hidden" value="{{$user->id_usuario}}" id="id_usuario_carrito" name="id_usuario_carrito">
                                <input type="hidden" value="{{$producto->id_producto}}" id="id_producto_carrito" name="id_producto_carrito">
                                <input type="hidden" value="1" id="cantidadproducto_carrito" name="cantidadproducto_carrito">
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Añadir a la cesta</button>

                                @endguest
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection