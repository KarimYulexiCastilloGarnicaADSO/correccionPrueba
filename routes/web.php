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
Route::get('/ver', [App\Http\Controllers\ViewsController::class, 'ver'])->name('ver');
Route::get('/agg', [App\Http\Controllers\ViewsController::class, 'agg'])->name('agg');
Route::get('/editar', [App\Http\Controllers\ViewsController::class, 'editar'])->name('editar');
Route::get('/eliminar', [App\Http\Controllers\ViewsController::class, 'eliminar'])->name('eliminar');
Route::post('/agregar', [App\Http\Controllers\MascotaController::class, 'guardar'])->name('agregar');