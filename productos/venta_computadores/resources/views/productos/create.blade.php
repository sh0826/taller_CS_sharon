@extends('layouts.admin')

@section('title', 'Lista de tus productos!')

@section('content')

<style>
    body {
        background-color: #ffeef8;
    }

    .container {
        background-color: #ffffffff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(255, 182, 193, 0.4);
        max-width: 700px;
        margin-top: 30px;
    }

    h2 {
        color: #e75480; /* Rosa fuerte */
        font-weight: bold;
    }

    label {
        color: #e75480;
        font-weight: 600;
    }

    .form-control, .form-select {
        border: 1px solid #f7a1c4;
        border-radius: 10px;
        transition: 0.3s;
    }

    .form-control:focus, .form-select:focus {
        border-color: #e75480;
        box-shadow: 0 0 8px rgba(231, 84, 128, 0.5);
    }

    .btn-success {
        background-color: #e75480;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-success:hover {
        background-color: #c94470;
        transform: scale(1.03);
    }

    .btn-secondary {
        background-color: #f7a1c4;
        border: none;
        color: white;
        border-radius: 10px;
    }

    .btn-secondary:hover {
        background-color: #e75480;
    }

    .alert-success {
        background-color: #fce4ec;
        color: #c2185b;
        border: 1px solid #f8bbd0;
    }
</style>

<div class="container">
    <h2 class="mb-4 text-center">Agregar Nuevo Producto</h2>

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

        <div class="text-center">
            <button type="submit" class="btn btn-success px-5">Guardar producto</button>
        </div>
    </form>
</div>
@endsection