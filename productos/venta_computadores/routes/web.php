<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\inicioSesionControlador;
use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);


Route::get('/', [inicioSesionControlador::class, 'showLoginForm'])->name('inicio');
Route::post('/inicio', [inicioSesionControlador::class, 'inicio']);
Route::get('/dashboard', [inicioSesionControlador::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [inicioSesionControlador::class, 'inicio'])->name('logout');

