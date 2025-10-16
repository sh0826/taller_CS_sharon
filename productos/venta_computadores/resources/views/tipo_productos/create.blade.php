@extends('layouts.admin')

@section('title', 'Agregar Tipo de Producto')

@section('content')
<div class="container">
    <h2 class="mb-4">Agregar Nuevo Tipo de Producto</h2>

    <form action="{{ route('tipo_productos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre_Tpc" class="form-label">Nombre del Tipo de Producto</label>
            <input type="text" name="nombre_Tpc" id="nombre_Tpc" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('tipo_productos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
