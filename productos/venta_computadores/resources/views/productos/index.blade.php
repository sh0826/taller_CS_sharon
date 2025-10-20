@extends('layouts.admin')

@section('title', 'Lista de tus productos!')

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
        margin-top: 30px;
    }

    h1 {
        color: #e75480;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #e75480;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #c94470;
        transform: scale(1.03);
    }

    .btn-warning {
        background-color: #f7a1c4;
        border: none;
        color: #fff;
        border-radius: 10px;
        font-weight: 600;
    }

    .btn-warning:hover {
        background-color: #e75480;
        color: white;
    }

    .btn-danger {
        background-color: #ff7aa8;
        border: none;
        border-radius: 10px;
        font-weight: 600;
    }

    .btn-danger:hover {
        background-color: #c94470;
    }

    .table {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(255, 182, 193, 0.2);
    }

    thead {
        background-color: #f7a1c4;
        color: white;
        font-weight: 600;
    }

    tbody tr:hover {
        background-color: #ffe6ef;
    }

    td, th {
        vertical-align: middle;
    }

    .alert-success {
        background-color: #fce4ec;
        color: #c2185b;
        border: 1px solid #f8bbd0;
        border-radius: 10px;
    }
</style>

<div class="container">
    <h1 class="text-center mb-4"> Lista de Productos</h1>

    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-hover text-center align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Almacenamiento</th>
                <th>RAM</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Tipo Producto</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $producto)
                <tr>
                    <td>{{ $producto->id_pc }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->almacenamiento }}</td>
                    <td>{{ $producto->ram }}</td>
                    <td>{{ $producto->modelo ?? 'N/A' }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->tipo_producto->nombre_Tpc ?? 'Sin tipo' }}</td>
                    <td>
                        @if($producto->imagen)
                            <img src="{{ asset('storage/'.$producto->imagen) }}" alt="imagen" width="80" class="rounded">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id_pc) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id_pc) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-muted">No hay productos registrados aún</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
