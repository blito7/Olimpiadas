<?php
include 'includes/header.php';
?>
<section class="hero">
  <h1>Bienvenido a Globe-Eco</h1>
  <form class="buscador" method="GET" action="resultados.php">
    <input type="text" name="destino" placeholder="¿A dónde quieres ir?" required />
    <select name="tipo" required>
      <option value="">Selecciona tipo</option>
      <option value="vuelos">Vuelos</option>
      <option value="hoteles">Hoteles</option>
      <option value="paquetes">Paquetes</option>
    </select>
    <input type="date" name="fecha" required min="<?php echo date('Y-m-d'); ?>" />
    <button type="submit">Buscar</button>
  </form>
</section>
<?php
include 'includes/footer.php';
?>
