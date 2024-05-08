<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});
Route::get('/contacto', function () {return view('contacto');});
Route::get('/tienda', function () {return view('tienda');});
Route::get('/detalles', function () {return view('detalles');});

Route::get('register', 'App\Http\Controllers\LoginController@index')->name('register');
Route::post('registrar','App\Http\Controllers\LoginController@postRegistration')->name('register.post');

Route::post('/privado')->middleware('auth')->name('privado');
