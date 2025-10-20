@extends('layouts.admin')

@section('title', 'Editar Tipo de Producto')

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

    h2 {
        color: #e75480; /* Rosa fuerte */
        font-weight: bold;
        text-align: center;
    }

    label {
        color: #e75480;
        font-weight: 600;
    }

    .form-control {
        border: 1px solid #f7a1c4;
        border-radius: 10px;
        transition: 0.3s;
    }

    .form-control:focus {
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
</style>

<div class="container">
    <h2 class="mb-4">Editar Tipo de Producto</h2>

    <form action="{{ route('tipo_productos.update', $tipo_producto->id_Tpc) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_Tpc" class="form-label">Nombre</label>
            <input 
                type="text" 
                name="nombre_Tpc" 
                id="nombre_Tpc" 
                class="form-control" 
                value="{{ $tipo_producto->nombre_Tpc }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea 
                name="descripcion" id="descripcion" class="form-control" >{{ $tipo_producto->descripcion }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">Actualizar</button>
            <a href="{{ route('tipo_productos.index') }}" class="btn btn-secondary px-4">Volver</a>
        </div>
    </form>
</div>
@endsection
