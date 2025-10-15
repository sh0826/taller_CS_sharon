<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin - TECHNOPLANET</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
 <div class="d-flex">
  <div class="sidebar">
    <nav>
      <a href="{{route('tipo.index')  }}">
        <i class="bi bi-gear-fill"></i> Tipos de Productos
      </a>
      <a href="{{route('productos.index')  }}">
        <i class="bi bi-gear-fill"></i> Productos
      </a>

    </nav>

      <a href="{{ route('logout') }}" class="btn btn-logout mt-3"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
         <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>

  <div class="dashboard-content w-100">
    <div class="header-dashboard">
      <h1>Panel de Administración</h1>
      <div class="user-info d-flex align-items-center">
        <div class="d-none d-md-block">
  <p class="mb-0 text-white fw-bold">
    {{ Auth::user()->name }} {{ Auth::user()->apellido }}
  </p>
  <small class="text-secondary">Administrador</small>
</div>

      </div>
    </div>
    @yield('content')
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
