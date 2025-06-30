<?php
include 'includes/header.php';
include 'datos.php';

echo '<h2>Hoteles disponibles</h2>';
echo '<div class="listado">';
foreach($hoteles as $hotel){
    echo '<div class="card">
        <h3>'.htmlspecialchars($hotel['nombre']).'</h3>
        <p>Ciudad: '.htmlspecialchars($hotel['ciudad']).'</p>
        <p>Estrellas: '.htmlspecialchars($hotel['estrellas']).'</p>
        <p>Precio por noche: $'.number_format($hotel['precio'], 0, ',', '.').'</p>
        <form method="POST" action="carrito.php">
            <input type="hidden" name="tipo" value="hotel" />
            <input type="hidden" name="id" value="'.$hotel['id'].'" />
            <button type="submit">Agregar al carrito</button>
        </form>
    </div>';
}
echo '</div>';

include 'includes/footer.php';
?>
