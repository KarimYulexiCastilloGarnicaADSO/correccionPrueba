<?php

use Illuminate\Support\Facades\Route;

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


// Rutas para los controladores de las vistas:
Route::get('/home', [App\Http\Controllers\ViewsController::class, 'home'])->name('home');
Route::get('/administrador', [App\Http\Controllers\ViewsController::class, 'administrador'])->name('administrador');

Route::get('/ver/{id}', [App\Http\Controllers\ViewsController::class, 'ver'])->name('ver');

Route::get('/agg', [App\Http\Controllers\ViewsController::class, 'agg'])->name('agg');
Route::post('/agregar', [App\Http\Controllers\MascotaController::class, 'guardar'])->name('agregar');

Route::get('/editar/{id}', [App\Http\Controllers\ViewsController::class, 'editar'])->name('editar');
Route::post('/valEditar/{id}', [App\Http\Controllers\MascotaController::class, 'editar'])->name('valEditar');

Route::get('/eliminar/{id}', [App\Http\Controllers\ViewsController::class, 'eliminar'])->name('eliminar');

// /{id}