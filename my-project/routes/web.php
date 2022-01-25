<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//esta sería estática, pero no se borra o da error
Route::get('listado', [PagesController::class, 'listado']) ;

//esta, dinámica
//Route::get('chollos/{id?}', [ PagesController::class, 'detalle' ]) -> name('chollos.detalle');

Route::get('formulario', [ PagesController::class, 'formulario']) -> name('formulario');
Route::post('chollos', [ PagesController::class, 'crear' ]) -> name('chollos.crear');


Route::get('editar/{id}', [ PagesController::class, 'editar' ]) -> name('chollos.editar');
Route::put('editar/{id}', [ PagesController::class, 'actualizar' ]) -> name('chollos.actualizar');
