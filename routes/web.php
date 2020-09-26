<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('formSubmit','PostController@formSubmit')->middleware('auth');

Route::get('/listaFrutas', function () {
    return view('listaFrutas');
})->middleware('auth');

Route::get('editar/{id}','PostController@editarFruta')->middleware('auth');
Route::post('actualizarDato','PostController@actualizarDato')->middleware('auth');

Route::get('eliminar/{id}','PostController@eliminarFruta')->middleware('auth');

Route::get('Volver', 'PostController@volver');

