@extends('layouts.admin')

@section('title', 'Tipos de Productos')

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
    <h1 class="text-center mb-4">Tipos de Productos </h1>

    <a href="{{ route('tipo_productos.create') }}" class="btn btn-primary mb-3">+ Agregar Tipo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-hover text-center align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id_Tpc }}</td>
                    <td>{{ $tipo->nombre_Tpc }}</td>
                    <td>{{ $tipo->descripcion_Tpc ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('tipo_productos.edit', $tipo->id_Tpc) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('tipo_productos.destroy', $tipo->id_Tpc) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este tipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-muted">No hay tipos registrados </td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
