<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});
Route::get('/contacto', function () {return view('contacto');});
Route::get('/tienda', function () {return view('tienda');});
Route::get('/detalles', function () {return view('detalles');});


Route::get('login', 'App\Http\Controllers\LoginController@indexLogin')->name('login');
Route::post('logear', 'App\Http\Controllers\LoginController@logear')->name('login.post');

Route::get('register', 'App\Http\Controllers\LoginController@indexRegister')->name('register');
Route::post('registrar','App\Http\Controllers\LoginController@postRegistration')->name('register.post');

Route::post('/privado')->middleware('auth')->name('privado');
