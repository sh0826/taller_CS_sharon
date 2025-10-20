@extends('layouts.admin')

@section('title', 'Editar Producto')

@section('content')

<style>

    body {
        background-color: #ffeef8;
    }

    .container {
        background-color: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(255, 182, 193, 0.4);
        max-width: 700px;
        margin-top: 30px;
    }

    h1 {
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

    .btn-primary {
        background-color: #e75480;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-primary:hover {
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

    img {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(231, 84, 128, 0.3);
    }
</style>

<div class="container">
    <h1 class="text-center mb-4">Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id_pc) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca:</label>
            <input type="text" name="marca" class="form-control" value="{{ $producto->marca }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo:</label>
            <input type="text" name="modelo" class="form-control" value="{{ $producto->modelo }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Procesador:</label>
            <input type="text" name="procesador" class="form-control" value="{{ $producto->procesador }}">
        </div>

        <div class="mb-3">
            <label class="form-label">RAM:</label>
            <input type="text" name="ram" class="form-control" value="{{ $producto->ram }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Almacenamiento:</label>
            <input type="text" name="almacenamiento" class="form-control" value="{{ $producto->almacenamiento }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio:</label>
            <input type="number" name="precio" class="form-control" value="{{ $producto->precio }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Imagen actual:</label><br>
            @if($producto->imagen)
                <img src="{{ asset('storage/'.$producto->imagen) }}" width="120">
            @else
                <span class="text-muted">Sin imagen</span>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Cambiar imagen:</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo de Producto:</label>
            <select name="tipo_producto_id" class="form-select" required>
                <option value="">Seleccione un tipo</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id_Tpc }}" 
                        {{ $producto->tipo_producto_id == $tipo->id_Tpc ? 'selected' : '' }}>
                        {{ $tipo->nombre_Tpc }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary px-4">Cancelar</a>
        </div>
    </form>
</div>
@endsection
