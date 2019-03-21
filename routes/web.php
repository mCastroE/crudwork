<?php

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

Route::get('/', function () {
    return redirect()->route('profesores.index');
})->name('home');

Route::resource('profesores', 'ProfesoresController');

Route::get('publicaciones/asignar', function () {
    return redirect()->route('publicaciones.index');
})->name('publicaciones.asignar');
Route::resource('publicaciones', 'PublicacionesController');

Route::get('profesor/publicaciones/{id}','PublicacionesController@index1')->name('publicaciones.index1');
