<?php
include 'includes/header.php';
include 'datos.php';

echo '<h2>Vuelos disponibles</h2>';
echo '<div class="listado">';
foreach($vuelos as $vuelo){
    echo '<div class="card">
        <h3>Vuelo a '.htmlspecialchars($vuelo['destino']).'</h3>
        <p>Origen: '.htmlspecialchars($vuelo['origen']).'</p>
        <p>Precio: $'.number_format($vuelo['precio'], 0, ',', '.').'</p>
        <form method="POST" action="carrito.php">
            <input type="hidden" name="tipo" value="vuelo" />
            <input type="hidden" name="id" value="'.$vuelo['id'].'" />
            <button type="submit">Agregar al carrito</button>
        </form>
    </div>';
}
echo '</div>';

include 'includes/footer.php';
?>
