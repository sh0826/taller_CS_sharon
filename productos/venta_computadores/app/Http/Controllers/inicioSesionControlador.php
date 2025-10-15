<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioSesionControlador extends Controller
{
    // Muestra el formulario
    public function showLoginForm()
    {
        return view('inicio');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        $user = $request->input('usuario');
        $pass = $request->input('password');

        if ($user === 'admin' && $pass === '1234') {
            session(['admin' => true]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Usuario o contraseña incorrectos');
    }

    // Muestra el dashboard (solo si está logueado)
    public function dashboard()
    {
        if (!session('admin')) {
            return redirect()->route('inicio');
        }

        return view('dashboard');
    }

    // Cierra sesión
    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('inicio');
    }
}
