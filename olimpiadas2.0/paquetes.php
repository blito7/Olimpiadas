<?php
include 'includes/header.php';
include 'datos.php';

echo '<h2>Paquetes turísticos disponibles</h2>';
echo '<div class="listado">';
foreach($paquetes as $paquete){
    echo '<div class="card">
        <h3>'.htmlspecialchars($paquete['nombre']).'</h3>
        <p>'.htmlspecialchars($paquete['descripcion']).'</p>
        <p>Precio: $'.number_format($paquete['precio'], 0, ',', '.').'</p>
        <form method="POST" action="carrito.php">
            <input type="hidden" name="tipo" value="paquete" />
            <input type="hidden" name="id" value="'.$paquete['id'].'" />
            <button type="submit">Agregar al carrito</button>
        </form>
    </div>';
}
echo '</div>';

include 'includes/footer.php';
?>
