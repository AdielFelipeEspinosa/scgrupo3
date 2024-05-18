<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});
Route::get('/contacto', function () {return view('contacto');});
Route::get('/detalles', function () {return view('detalles');});


Route::get('login', 'App\Http\Controllers\LoginController@indexLogin')->name('login');
Route::post('postLogin', 'App\Http\Controllers\LoginController@postLogin')->name('login.post');

Route::get('register', 'App\Http\Controllers\LoginController@indexRegister')->name('register');
Route::post('postRegister','App\Http\Controllers\LoginController@postRegister')->name('register.post');

Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::get('shopCreate', 'App\Http\Controllers\ProductoController@index');
Route::get('shop', 'App\Http\Controllers\ProductoController@mostrarProducto')->name('shop');
Route::post('shop', 'App\Http\Controllers\ProductoController@store')->name('shop.post');