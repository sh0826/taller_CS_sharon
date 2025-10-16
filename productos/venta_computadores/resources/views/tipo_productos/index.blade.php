@extends('layouts.admin')

@section('title', 'Tipos de Productos')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Tipos de Productos</h1>

    <a href="{{ route('tipo_productos.create') }}" class="btn btn-primary mb-3">+ Agregar Tipo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-hover text-center align-middle">
        <thead class="table-light">
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
                <tr><td colspan="4" class="text-muted">No hay tipos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
