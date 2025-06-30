<?php
session_start();
include 'includes/header.php';
?>

<h2>Armá tu paquete personalizado</h2>

<form id="formPaquete" action="confirmar_paquete.php" method="POST">
  <label for="destino">Destino:</label>
  <select name="destino" id="destino" required>
    <option value="">Elegí un destino</option>
    <option value="Bariloche">Bariloche</option>
    <option value="Mendoza">Mendoza</option>
    <option value="Cataratas">Cataratas del Iguazú</option>
    <option value="Salta">Salta</option>
  </select>

  <label for="alojamiento">Tipo de alojamiento:</label>
  <select name="alojamiento" id="alojamiento" required>
    <option value="">Seleccioná una opción</option>
    <option value="hotel_3">Hotel 3★</option>
    <option value="hotel_4">Hotel 4★</option>
    <option value="hostel">Hostel</option>
    <option value="cabaña">Cabaña</option>
  </select>

  <label>Actividades extra:</label>
  <label><input type="checkbox" name="actividades[]" value="excursion"> Excursión</label>
  <label><input type="checkbox" name="actividades[]" value="traslado"> Traslado al aeropuerto</label>
  <label><input type="checkbox" name="actividades[]" value="comidas"> Comidas incluidas</label>

  <label>Fecha de inicio:</label>
  <input type="date" name="fecha_inicio" required>

  <label>Fecha de fin:</label>
  <input type="date" name="fecha_fin" required>

  <div class="resumen">
    <h3>Resumen estimado:</h3>
    <p id="resumenTexto">Completa los campos para ver el costo.</p>
  </div>

  <input type="submit" value="Agregar al carrito">
</form>

<script src="js/paquete.js"></script>

<?php
include 'includes/footer.php';
?>
