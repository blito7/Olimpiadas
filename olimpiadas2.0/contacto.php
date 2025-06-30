<?php
include 'includes/header.php';

$mensaje = '';
$clase = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje_form = trim($_POST['mensaje'] ?? '');

    if($nombre && $email && $mensaje_form && filter_var($email, FILTER_VALIDATE_EMAIL)){
        // Simulación envío (no real)
        $mensaje = 'Gracias por contactarnos, ' . htmlspecialchars($nombre) . '. Te responderemos pronto.';
        $clase = 'success';
    } else {
        $mensaje = 'Por favor completa todos los campos correctamente.';
        $clase = 'error';
    }
}
?>

<h2>Contacto</h2>
<?php if($mensaje): ?>
  <p class="<?php echo $clase; ?>"><?php echo $mensaje; ?></p>
<?php endif; ?>
<form id="contactoForm" method="POST" action="contacto.php">
  <input type="text" name="nombre" placeholder="Tu nombre" required />
  <input type="email" name="email" placeholder="Tu email" required />
  <textarea name="mensaje" placeholder="Mensaje" rows="5" required></textarea>
  <button type="submit">Enviar</button>
</form>

<?php
include 'includes/footer.php';
?>
