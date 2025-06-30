<?php
session_start();
include 'includes/header.php';

$destino = $_POST['destino'];
$alojamiento = $_POST['alojamiento'];
$actividades = $_POST['actividades'] ?? [];
$inicio = $_POST['fecha_inicio'];
$fin = $_POST['fecha_fin'];

echo "<h2>¡Paquete agregado!</h2>";
echo "<p><strong>Destino:</strong> $destino</p>";
echo "<p><strong>Alojamiento:</strong> $alojamiento</p>";
echo "<p><strong>Actividades:</strong> " . implode(", ", $actividades) . "</p>";
echo "<p><strong>Fechas:</strong> $inicio al $fin</p>";

include 'includes/footer.php';
?>
