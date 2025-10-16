@extends('layouts.admin')

@section('title', 'Agregar nuevo producto')

@section('content')
<div class="container">
    <h2 class="mb-4">Agregar Nuevo Producto</h2>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary mb-3">Volver a la lista</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca:</label>
            <input type="text" name="marca" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo:</label>
            <input type="text" name="modelo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Procesador:</label>
            <input type="text" name="procesador" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">RAM:</label>
            <input type="text" name="ram" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Almacenamiento:</label>
            <input type="text" name="almacenamiento" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Imagen:</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo de Producto:</label>
            <select name="tipo_producto_id" class="form-select" required>
                <option value="">Seleccione un tipo</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id_Tpc }}">{{ $tipo->nombre_Tpc }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar producto</button>
    </form>
</div>
@endsection

