@extends('layouts.include')
@section('content')

<div class="container" style="padding: 5%; ">
    <div class="row" style="justify-content: center;">
        <div class="col-lg-9" >
            <div class="row">
                @foreach($productos as $pro)
                    <div class="col-md-4 mb-4">
                        <div class="card mb-4 product-wap rounded-0 h-100">
                            <div class="card rounded-0 card h-100">
                                <img class="card-img h-100" src="{{ $pro->link }}" alt="{{ $pro->nombre_producto }}">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="#"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="/detalles"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="/detalles" class="h3 d-block text-center">{{ $pro->nombre_producto }}</a>
                                <p class="text-center mb-0">${{ $pro->costo_producto }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection