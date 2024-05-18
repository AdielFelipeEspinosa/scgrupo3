@extends('layouts.include')
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Crear Producto</h1>

    <form class="mt-4" method="POST" action="{{ route('login.post') }}">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre Del Producto" id="nombre_producto" name="nombre_producto">
        @if ($errors->has('nombre_producto'))
        <span class="text-danger">{{$errors->first('nombre_producto') }}</span>
        @endif

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Precio del Producto" id="costo_producto" name="costo_producto">
        @if ($errors->has('costo_producto'))
        <span class="text-danger">{{$errors->first('costo_producto') }}</span>
        @endif

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Descripcion del Producto" id="descripcion_producto" name="descripcion_producto">
        @if ($errors->has('descripcion_producto'))
        <span class="text-danger">{{$errors->first('descripcion_producto') }}</span>
        @endif

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Cantidad del Producto" id="cantidad_producto" name="cantidad_producto">
        @if ($errors->has('cantidad_producto'))
        <span class="text-danger">{{$errors->first('cantidad_producto') }}</span>
        @endif

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Cantidad del Producto" id="cantidad_producto" name="cantidad_producto">
        @if ($errors->has('cantidad_producto'))
        <span class="text-danger">{{$errors->first('cantidad_producto') }}</span>
        @endif

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Link de Imagen" id="link" name="link">
        @if ($errors->has('link'))
        <span class="text-danger">{{$errors->first('link') }}</span>
        @endif

        <div>
            <select name="id_marca_producto" id="id_marca_producto" class="form-select">
                <option value="" disabled selected>Selecciona la Marca</option>
                @foreach($marcas as $marca)
                <option value="{{$marca->id_marca}}">{{ $marca->nombre_marca}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_marca_producto'))
            <span class="text-danger">{{$errors->first('id_marca_producto') }}</span>
            @endif
        </div>

        <div>
            <select name="id_talla_producto" id="id_talla_producto" class="form-select">
                <option value="" disabled selected>Selecciona la Talla</option>
                @foreach($tallas as $talla)
                <option value="{{$talla->id_talla}}">{{ $talla->nombre_talla}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_talla_producto'))
            <span class="text-danger">{{$errors->first('id_talla_producto') }}</span>
            @endif
        </div>

        <div>
            <select name="id_color_producto" id="id_color_producto" class="form-select">
                <option value="" disabled selected>Selecciona el Color</option>
                @foreach($colores as $color)
                <option value="{{$color->id_color}}">{{ $color->nombre_color}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_color_producto'))
            <span class="text-danger">{{$errors->first('id_color_producto') }}</span>
            @endif
        </div>

        <div>
            <select name="id_categoria_producto" id="id_categoria_producto" class="form-select ">
                <option value="" disabled selected>Selecciona la Categoria</option>
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{ $categoria->nombre_categoria}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_categoria_producto'))
            <span class="text-danger">{{$errors->first('id_categoria_producto') }}</span>
            @endif
        </div>

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>

    </form>


</div>
@endsection