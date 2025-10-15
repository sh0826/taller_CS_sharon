<form method="POST" action="/inicio">
    @csrf
    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
</form>
