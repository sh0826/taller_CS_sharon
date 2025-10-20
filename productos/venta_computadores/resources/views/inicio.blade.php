<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login - TechnoPlanet</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #ffe5ec; /* Rosa pastel suave */
      font-family: 'Poppins', sans-serif;
      color: #333;
    }

    .card {
      background-color: #fff;
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      color: #ff6b9c; /* Rosa más vivo */
      font-weight: 600;
      font-size: 1.4rem;
    }

    .form-label {
      font-weight: 500;
      color: #555;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #ffc2d1;
    }

    .form-control:focus {
      border-color: #ffb3c6;
      box-shadow: 0 0 4px #ffd6e0;
    }

    .btn-primary {
      background-color: #ffb3c6; /* Rosa pastel medio */
      border: none;
      font-weight: 600;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #ff8fab;
      transform: scale(1.03);
    }

    .alert-danger {
      background-color: #ffd6e0;
      color: #b23a48;
      border: none;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="d-flex vh-100 align-items-center justify-content-center">
    <div class="card p-4" style="width:360px;">
      <h5 class="card-title text-center mb-3"> Inicio de sesión</h5>
      

      @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf
        
        <div class="mb-3">
          <label class="form-label">Usuario</label>
          <input type="text" name="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>
