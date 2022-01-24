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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', function(){
    return view('inicio');
}) -> name('inicio');

//esta sería estática, pero no se borra o da error
Route::get('chollos', [PagesController::class, 'chollos']) -> name('chollos');

//esta, dinámica
Route::get('chollos/{id?}', [ PagesController::class, 'detalle' ]) -> name('chollos.detalle');