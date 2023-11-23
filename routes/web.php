<?php

use App\Http\Controllers\OfertaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Add this line


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth.check'])->group(function () {
    //rutas protegidas van aquí
    Route::controller(OfertaController::class)->group(function(){
        Route::get('/ofertas/editar/{oferta}', 'editar')->name('ofertas.editar');
        Route::put('/ofertas/actualizar/{id}', 'actualizar')->name('ofertas.actualizar');
        Route::delete('/ofertas/eliminar/{id}', 'eliminar')->name('ofertas.eliminar');
    });

    //Poner aquí las rutas que se quieran proteger
});

