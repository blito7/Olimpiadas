<?php
session_start();
include 'includes/header.php';
include 'datos.php';

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito'] = [];
}

// Agregar al carrito
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipo']) && isset($_POST['id'])){
    $tipo = $_POST['tipo'];
    $id = intval($_POST['id']);
    $item = null;
    if($tipo == 'vuelo'){
        foreach($vuelos as $v){
            if($v['id'] == $id) $item = ['tipo'=>'Vuelo', 'nombre'=>'Vuelo a '.$v['destino'], 'precio'=>$v['precio']];
        }
    } elseif($tipo == 'hotel'){
        foreach($hoteles as $h){
            if($h['id'] == $id) $item = ['tipo'=>'Hotel', 'nombre'=>$h['nombre'], 'precio'=>$h['precio']];
        }
    } elseif($tipo == 'paquete'){
        foreach($paquetes as $p){
            if($p['id'] == $id) $item = ['tipo'=>'Paquete', 'nombre'=>$p['nombre'], 'precio'=>$p['precio']];
        }
    }
    if($item){
        $_SESSION['carrito'][] = $item;
        echo '<p class="success">Producto agregado al carrito.</p>';
    }
}

// Eliminar del carrito
if(isset($_GET['eliminar'])){
    $pos = intval($_GET['eliminar']);
    if(isset($_SESSION['carrito'][$pos])){
        unset($_SESSION['carrito'][$pos]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
        echo '<p class="success">Producto eliminado del carrito.</p>';
    }
}

// Finalizar compra (simulada)
if(isset($_POST['finalizar'])){
    if(empty($_SESSION['carrito'])){
        echo '<p class="error">Tu carrito está vacío.</p>';
    } else {
        echo '<p class="success">Gracias por tu compra. ¡Pronto recibirás un correo de confirmación!</p>';
        $_SESSION['carrito'] = [];
    }
}

?>

<h2>Tu Carrito</h2>
<?php if(empty($_SESSION['carrito'])): ?>
  <p>Tu carrito está vacío.</p>
<?php else: ?>
<table>
  <thead>
    <tr>
      <th>Tipo</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($_SESSION['carrito'] as $key => $prod): ?>
    <tr>
      <td><?php echo htmlspecialchars($prod['tipo']); ?></td>
      <td><?php echo htmlspecialchars($prod['nombre']); ?></td>
      <td>$<?php echo number_format($prod['precio'], 0, ',', '.'); ?></td>
      <td><a href="carrito.php?eliminar=<?php echo $key; ?>" class="btn-eliminar">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<form method="POST" action="carrito.php" style="margin-top: 1em;">
  <button type="submit" name="finalizar">Finalizar compra</button>
</form>
<?php endif; ?>
<?php
include 'includes/footer.php';
?>
