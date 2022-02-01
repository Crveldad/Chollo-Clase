<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'listado']) -> name('inicio') ; 

Route::get('formulario', [ PagesController::class, 'formulario']) -> name('formulario');
Route::post('chollos', [ PagesController::class, 'crear' ]) -> name('chollos.crear');

Route::get('editar/{id?}', [ PagesController::class, 'editar' ]) -> name('chollos.editar');
Route::put('editar/{id?}', [ PagesController::class, 'actualizar' ]) -> name('chollos.actualizar');

Route::delete('eliminar/{id?}', [ PagesController::class, 'eliminar' ]) -> name('chollos.eliminar');

Route::get('nuevos', [ PagesController::class, 'nuevos']) -> name('nuevos');
Route::get('destacados', [ PagesController::class, 'destacados']) -> name('destacados');
Auth::routes();

//creado automáticamente
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
