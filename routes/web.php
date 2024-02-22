<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta raíz para mostrar la vista index.blade.php
Route::get('/', function () {
    return view('create');
});

// Rutas para el controlador ProductoController
Route::get('/productos', 'ProductoController@index')->name('productos.index');
Route::get('/productos/create', 'ProductoController@create')->name('productos.create');
Route::post('/productos', 'ProductoController@store')->name('productos.store');
Route::get('/productos/{id}', 'ProductoController@show')->name('productos.show');
Route::get('/productos/{id}/edit', 'ProductoController@edit')->name('productos.edit');
Route::put('/productos/{id}', 'ProductoController@update')->name('productos.update');
Route::delete('/productos/{id}', 'ProductoController@destroy')->name('productos.destroy');

