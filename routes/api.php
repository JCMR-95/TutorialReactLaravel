<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::get('/wallet', 'WalletController@index');

Route::post('formSubmit','PostController@formSubmit');
Route::get('frutas/lista', 'PostController@mostrarFrutas');
Route::get('editar/{id}','PostController@editarFruta');
Route::post('actualizarDato','PostController@actualizarDato');


