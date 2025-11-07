<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inicio;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;

Route::get('/', [Inicio::class, 'showLoginForm'])->name('inicio');
Route::post('/login', [Inicio::class, 'login'])->name('login');

Route::resource('productos', ProductoController::class);
Route::resource('tipo_productos', TipoProductoController::class);

