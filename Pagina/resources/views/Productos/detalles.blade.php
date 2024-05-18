@extends('layouts.include')
@section('content')

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
                        <form action="" method="GET">
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
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Añadir a la cesta</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection