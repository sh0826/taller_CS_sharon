<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = TipoProducto::all();
        return view('tipo_productos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipo_productos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_Tpc' => 'required|string|max:100',
            'descripcion_Tpc' => 'nullable|string|max:250',
        ]);
        $validated['descripcion_Tpc'] = $validated['descripcion_Tpc'] ?? '';

        TipoProducto::create($validated);
        return redirect()->route('tipo_productos.index')->with('success', 'Tipo de producto creado correctamente.');
    }

    public function edit(TipoProducto $tipo_producto)
    {
        return view('tipo_productos.edit', compact('tipo_producto'));
    }

    public function update(Request $request, TipoProducto $tipo_producto)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
        ]);

        $tipo_producto->update($validated);
        return redirect()->route('tipo_productos.index')->with('success', 'Tipo de producto actualizado correctamente.');
    }

    public function destroy(TipoProducto $tipo_producto)
    {
        $tipo_producto->delete();
        return redirect()->route('tipo_productos.index')->with('success', 'Tipo de producto eliminado.');
    }
}
