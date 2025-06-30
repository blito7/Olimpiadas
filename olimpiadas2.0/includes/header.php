<?php
$active_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Globe-Eco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/menu.js" defer></script>
</head>
<body>

<header>
  <div class="logo">
    <a href="index.php">🌍 Globe-Eco</a>
  </div>

  <div class="menu-icon" id="menu-toggle">
    ☰
  </div>

  <nav id="main-menu" class="hidden">
    <ul>
      <li><a href="index2.php">Inicio</a></li>
      <li><a href="armar_paquete_dinamico.php">Armá tu paquete</a></li>
      <li><a href="mapa_destinos.php?destino=Bariloche">Ver en mapa</a></li>
      <li><a href="carrito.php">Carrito</a></li>
      <li><a href="login.php">Iniciar sesión</a></li>
      <li><a href="empresa_login.php">Panel empresa</a></li>
    </ul>
  </nav>
</header>
