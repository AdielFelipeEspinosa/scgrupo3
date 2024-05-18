@extends('layouts.include')
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

  <h1 class="text-3xl text-center font-bold">Register</h1>

  <form class="mt-4" method="POST" action="{{ route('register.post') }}">
    @csrf

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Nombre de Usuario" id="login_usuario" name="login_usuario">
    @if ($errors->has('login_usuario'))
    <span class="text-danger">{{
    $errors->first('login_usuario') }}</span>
    @endif

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre Completo" id="nombre_usuario" name="nombre_usuario">
    @if ($errors->has('nombre_usuario'))
    <span class="text-danger">{{
    $errors->first('nombre_usuario') }}</span>
    @endif

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email_usuario" name="email_usuario">
    @if ($errors->has('email_usuario'))
    <span class="text-danger">{{
    $errors->first('email_usuario') }}</span>
    @endif

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Celular" id="celular_usuario" name="celular_usuario">
    @if ($errors->has('celular_usuario'))
    <span class="text-danger">{{
    $errors->first('celular_usuario') }}</span>
    @endif

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Direccion" id="direccion_usuario" name="direccion_usuario">
    @if ($errors->has('direccion_usuario'))
    <span class="text-danger">{{
    $errors->first('direccion_usuario') }}</span>
    @endif

    <div>
      <select name="id_municipio_usuario" id="id_municipio_usuario" class="form-select">
        <option value="" disabled selected>Selecciona el Municipio</option>
        @foreach($municipios as $municipio)
        <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre_municipio }}</option>
        @endforeach
        </select>
        @if ($errors->has('id_municipio_usuario'))
        <span class="text-danger">{{
        $errors->first('id_municipio_usuario') }}</span>
          @endif
    </div>

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">
    @if ($errors->has('password'))
    <span class="text-danger">{{
    $errors->first('password') }}</span>
    @endif

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Repetir Contraseña" id="password_confirmation" name="password_confirmation">
    @if ($errors->has('password_confirmation'))
    <span class="text-danger">{{
    $errors->first('password_confirmation') }}</span>
    @endif

    <label class="form-check-label" for="gridCheck">
      <a href="/login">¿Ya tienes una cuenta?.¡Inicia sesión!</a>
    </label>

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>


  </form>


</div>
@endsection