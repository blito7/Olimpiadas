
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Globe-Go Viajes Vacacionales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
    <a class="navbar-brand fw-bold" href="#">🌄 GLOBE-GO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#paquetes">Paquetes</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonios">Testimonios</a></li>
        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
      </ul>
      <div class="d-flex align-items-center">
        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#loginModal">👤 Ingresar</button>
        <span class="ms-3">🛒</span>
      </div>
    </div>
  </nav>

  <!-- Modal de Login -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <form action="login_proceso.php" method="POST">
          <div class="modal-body">
            <input type="email" class="form-control mb-3" name="email" placeholder="Correo electrónico" required>
            <input type="password" class="form-control mb-3" name="contrasena" placeholder="Contraseña (usa admin_ si sos jefe)" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- CONTENIDO DEMO -->
  <div class="container my-5">
    <h2 class="text-center">¡Bienvenido a Globe-Go!</h2>
    <p class="text-center">Este es el contenido demo. Tu compañero puede seguir editando esta página.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
