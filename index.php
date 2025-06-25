<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Globe-Go Viajes Vacacionales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
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
        <span class="me-3">👤 Ingresar</span>
        <span>🛒</span>
      </div>
    </div>
  </nav>

  <!-- CARRUSEL -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/upscalemedia-transformed.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/CARMEN DE PATAGONES NOTA DE TAPA.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/puente3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    <!-- Login -->
    <div class="login-box position-absolute top-50 start-50 translate-middle bg-white p-4 rounded shadow">
      <h5 class="mb-3">Inicie Sesion</h5>
      <input type="text" class="form-control mb-2" placeholder="Usuario">
      <input type="password" class="form-control mb-2" placeholder="Contraseña">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="remember">
        <label class="form-check-label" for="remember">Recordar datos</label>
      </div>
      <button class="btn btn-primary w-100 mb-2">Iniciar Sesion</button>
      <small>No tienes cuenta? <a href="#">Registrarse!</a></small>
    </div>
  </div>

  <!-- POR QUÉ ELEGIRNOS -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="mb-4">¿Por qué elegir Globe-Go?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <i class="bi bi-airplane-engines fs-1 text-primary"></i>
          <h5 class="mt-2">Viajes Personalizados</h5>
          <p>Diseñamos itinerarios a medida para cada viajero.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-shield-check fs-1 text-primary"></i>
          <h5 class="mt-2">Seguridad Garantizada</h5>
          <p>Trabajamos con proveedores verificados y seguros.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-currency-dollar fs-1 text-primary"></i>
          <h5 class="mt-2">Precios Competitivos</h5>
          <p>Las mejores tarifas del mercado en vuelos y hoteles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PAQUETES -->
  <section class="container my-5" id="paquetes">
    <h2 class="text-center mb-4">Paquetes Turísticos</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Playa Cancún</h5>
            <p class="card-text">7 días en hotel 5 estrellas con vuelos incluidos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Europa Express</h5>
            <p class="card-text">Tour por 5 países europeos en 15 días.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Sur de Chile</h5>
            <p class="card-text">Aventura en la Patagonia y fiordos australes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section class="bg-light py-5" id="testimonios">
    <div class="container">
      <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <blockquote class="blockquote text-center">
            <p class="mb-0">“Una experiencia inolvidable, organización perfecta.”</p>
            <footer class="blockquote-footer">María P.</footer>
          </blockquote>
        </div>
        <div class="col-md-6">
          <blockquote class="blockquote text-center">
            <p class="mb-0">“Volveré a viajar con Globe-Go, todo fue fácil y seguro.”</p>
            <footer class="blockquote-footer">Juan R.</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section class="container my-5" id="contacto">
    <h2 class="text-center mb-4">Contáctanos</h2>
    <form class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Nombre completo" required>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" placeholder="Correo electrónico" required>
      </div>
      <div class="col-12">
        <textarea class="form-control" rows="4" placeholder="Mensaje o consulta" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary px-5">Enviar</button>
      </div>
    </form>
  </section>

  <!-- MAPA -->
  <section class="container mb-5">
    <h2 class="text-center mb-4">Dónde estamos</h2>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3083.5027990630676!2d-62.99757892404226!3d-40.79746497138159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961c2b3d1a0052b5%3A0xe447ab84a73c8bc2!2sCarmen%20de%20Patagones%2C%20Provincia%20de%20Buenos%20Aires%2C%20Argentina!5e0!3m2!1ses-419!2sar!4v1718829246176!5m2!1ses-419!2sar" allowfullscreen></iframe>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-dark text-white pt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Contacto</h5>
          <p>📍 Carmen De Patagones, Argentina</p>
          <p>📞 +54 2920 323232</p>
          <p>✉️ contacto@globe-go.com</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Enlaces Rápidos</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
            <li><a href="#paquetes" class="text-white text-decoration-none">Paquetes</a></li>
            <li><a href="#testimonios" class="text-white text-decoration-none">Testimonios</a></li>
            <li><a href="#contacto" class="text-white text-decoration-none">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Síguenos</h5>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      <div class="text-center py-3 border-top border-secondary mt-3">
        &copy; 2025 Globe-Go. Todos los derechos reservados.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>