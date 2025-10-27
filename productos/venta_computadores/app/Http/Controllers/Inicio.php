<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller

{
    // Muestra el formulario de login
    public function showLoginForm()
    {
        return view('inicio'); // resources/views/inicio.blade.php
    }

    // Procesa el "login" simple y redirige a productos.index sin validar
    public function login()
    {
        // Opcional: puedes leer los inputs si quieres mostrar mensajes
        // $usuario = $request->input('usuario');

        // Redirige siempre al index de productos (sin autenticar)
        return redirect()->route('productos.index');
    }
}


