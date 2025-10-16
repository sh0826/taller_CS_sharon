@extends('layouts.admin')

@section('title', 'Lista de tus productos!')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Listado de Productos</h1>

    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">+ Agregar Producto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-hover text-center align-middle">
        <thead class="table-light">
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
                            <img src="{{ asset('storage/'.$producto->imagen) }}" alt="imagen" width="80">
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
                <tr><td colspan="9" class="text-muted">No hay productos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection


