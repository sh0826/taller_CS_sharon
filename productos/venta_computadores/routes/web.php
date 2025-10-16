<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\inicioSesionControlador;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;

Route::get('/', [inicioSesionControlador::class, 'showLoginForm'])->name('inicio');
Route::post('/login', [inicioSesionControlador::class, 'login'])->name('login');

Route::resource('productos', ProductoController::class);
Route::resource('tipo_productos', TipoProductoController::class);

