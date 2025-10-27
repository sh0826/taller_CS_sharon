<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use App\Http\Controllers\TipoProductoController;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index()
{
    // Cargar los productos junto con su tipo de producto
    $productos = Producto::with('tipo_producto')->get();

    return view('productos.index', compact('productos'));
}
    /**
     * Show the form for creating a new resource.
     */
 
    public function create()
{
    $tipos = TipoProducto::all();
    return view('productos.create', compact('tipos'));
}


    public function store(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|string|max:150',
        'marca' => 'required|string|max:100',
        'modelo' => 'nullable|string|max:150',
        'procesador' => 'nullable|string|max:50',
        'ram' => 'nullable|string|max:50',
        'almacenamiento' => 'nullable|string|max:200',
        'precio' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'tipo_producto_id' => 'required|integer'
    ]);

    // Guardar la imagen si se sube
    if ($request->hasFile('imagen')) {
        $validated['imagen'] = $request->file('imagen')->store('productos', 'public');
    }

    // Crear el producto
    Producto::create($validated);

    return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
}

    public function show(Producto $producto)
    {
        return view('empleados.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $producto = Producto::findOrFail($id);
    $tipos = TipoProducto::all();
    return view('productos.edit', compact('producto', 'tipos'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
   {
    $validated = $request->validate([
        'nombre' => 'required|string|max:150',
        'marca' => 'required|string|max:100',
        'modelo' => 'nullable|string|max:100',
        'procesador' => 'nullable|string|max:100',
        'ram' => 'nullable|string|max:50',
        'almacenamiento' => 'nullable|string|max:100',
        'precio' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'tipo_producto_id' => 'required|integer'
    ]);

    // Guardar la imagen si se sube
    if ($request->hasFile('imagen')) {
        $validated['imagen'] = $request->file('imagen')->store('productos', 'public');
    }

    // Crear el producto
    $producto->update($validated);
        return redirect()->route('productos.index')->
        with('success','registro actualizado del producto');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
