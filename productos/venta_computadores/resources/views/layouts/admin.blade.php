<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>@yield('title', 'Panel de Administración')</title>

  <style>
    header {
      background-color: #e887c9ff; /* Verde pastel suave */
      color: #333;
      border-bottom: 4px solid #000000ff;
    }

    header ul li {
      font-weight: 500;
    }

    header a {
      color: #333;
      background-color: #ffe5ec; /* Rosa pastel suave */
      padding: 6px 12px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    header a:hover {
      background-color: #ffcad4;
      color: #222;
    }

    h5 {
      color: #000000ff;
    }

  </style>
</head>

<body>
  <header class="container-fluid py-3 mb-4 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
      <h5 class="m-0 fw-bold">Bienvenido Administrador</h5>
      <nav>
        <ul class="d-flex list-unstyled gap-3 m-0">
          <li><a href="{{ route('productos.index') }}">Productos</a></li>
          <li><a href="{{ route('tipo_productos.index') }}">Tipo de Productos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    @yield('content')
  </main>

</body>
</html>

