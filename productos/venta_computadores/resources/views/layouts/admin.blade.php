<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>@yield('title', 'lol')</title>
</head>
<body>
  <header class="container-fluid bg-dark text-light py-3 mb-4 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
      <nav>
        <ul class="d-flex list-unstyled gap-3 m-0">
          <li><a href="{{ route('productos.index') }}" class="text-light text-decoration-none">Productos</a></li>
          <li><a href="{{ route('tipo_productos.index') }}" class="text-light text-decoration-none">Tipo productos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mt-4">
      
      
      {{-- Aquí Laravel inyecta la vista hija --}}
      @yield('content')
  </main>

</body>
</html>
