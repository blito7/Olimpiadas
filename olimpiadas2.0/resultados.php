<?php
include 'includes/header.php';
include 'datos.php';

$destino = isset($_GET['destino']) ? strtolower(trim($_GET['destino'])) : '';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : '';

function filtrarPorDestino($items, $campo, $destino){
    return array_filter($items, function($item) use ($campo, $destino){
        return strpos(strtolower($item[$campo]), $destino) !== false;
    });
}

echo "<h2>Resultados para '".htmlspecialchars($destino)."' en ".htmlspecialchars($tipo)."</h2>";

if($tipo == 'vuelos'){
    $filtrados = filtrarPorDestino($vuelos, 'destino', $destino);
    if(count($filtrados) > 0){
        echo '<div class="listado">';
        foreach($filtrados as $vuelo){
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
    } else {
        echo '<p>No se encontraron vuelos para ese destino.</p>';
    }
} elseif($tipo == 'hoteles'){
    $filtrados = filtrarPorDestino($hoteles, 'ciudad', $destino);
    if(count($filtrados) > 0){
        echo '<div class="listado">';
        foreach($filtrados as $hotel){
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
    } else {
        echo '<p>No se encontraron hoteles para ese destino.</p>';
    }
} elseif($tipo == 'paquetes'){
    $filtrados = filtrarPorDestino($paquetes, 'nombre', $destino);
    if(count($filtrados) > 0){
        echo '<div class="listado">';
        foreach($filtrados as $paquete){
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
    } else {
        echo '<p>No se encontraron paquetes para ese destino.</p>';
    }
} else {
    echo '<p>Tipo no válido.</p>';
}

include 'includes/footer.php';
?>
