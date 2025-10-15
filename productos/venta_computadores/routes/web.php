<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\inicioSesionControlador;

Route::get('/', [inicioSesionControlador::class, 'showLoginForm'])->name('inicio');
Route::post('/login', [inicioSesionControlador::class, 'inicio']);
Route::get('/dashboard', [inicioSesionControlador::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [inicioSesionControlador::class, 'inicio'])->name('logout');

