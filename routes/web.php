<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\FavoritoController;



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
    return view('Login.login');
});

/*Route::resource('login', LoginController::class);
Route::resource('registro', RegistroController::class);*/

Route::get('Vregistro', function () {
    return view('Login.registro');
});


Route::get('home', function () {
    return view('Login.login');
});


Route::post('login', [LoginController::class, 'store']);
Route::post('registro.store', [RegistroController::class, 'store']);
Route::get('home', [LoginController::class, 'index']);
Route::get('inicio', [FavoritoController::class, 'index']);
Route::get('listfavoritos', function () {
    return view('Favorito.favorito.blade');
});




