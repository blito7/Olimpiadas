<?php
// Recibe: { usuario_id: int }
// Busca el carrito del usuario, crea la orden y sus ítems, vacía el carrito.
// Retorna: { status, msg, orden_id }

header("Content-Type: application/json");
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['usuario_id'])) {
    echo json_encode(["status"=>"error", "msg"=>"Falta usuario_id"]);
    exit;
}

$usuario_id = intval($input['usuario_id']);

try {
    // Traer carrito
    $stmt = $pdo->prepare("SELECT c.paquete_id, c.cantidad, p.precio
                           FROM carrito c
                           JOIN paquetes p ON c.paquete_id = p.id
                           WHERE c.usuario_id = :usuario_id");
    $stmt->execute(['usuario_id'=>$usuario_id]);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$items) {
        echo json_encode(["status"=>"error", "msg"=>"El carrito está vacío"]);
        exit;
    }

    // Calcular total
    $total = 0;
    foreach ($items as $i) {
        $total += $i['cantidad'] * $i['precio'];
    }

    $pdo->beginTransaction();

    // Crear orden
    $stmt = $pdo->prepare("INSERT INTO ordenes (usuario_id, total, estado) VALUES (:usuario_id, :total, 'pendiente')");
    $stmt->execute([
        'usuario_id' => $usuario_id,
        'total' => $total
    ]);
    $orden_id = $pdo->lastInsertId();

    // Insertar ítems
    $insert_item = $pdo->prepare("INSERT INTO orden_items (orden_id, paquete_id, cantidad, precio_unitario)
                                  VALUES (:orden_id, :paquete_id, :cantidad, :precio_unitario)");
    foreach ($items as $i) {
        $insert_item->execute([
            'orden_id' => $orden_id,
            'paquete_id' => $i['paquete_id'],
            'cantidad' => $i['cantidad'],
            'precio_unitario' => $i['precio']
        ]);
    }

    // Vaciar carrito
    $pdo->prepare("DELETE FROM carrito WHERE usuario_id = :usuario_id")->execute(['usuario_id'=>$usuario_id]);

    $pdo->commit();

    echo json_encode(["status"=>"ok", "msg"=>"Orden generada", "orden_id" => $orden_id]);

} catch(Exception $e) {
    if ($pdo->inTransaction()) $pdo->rollBack();
    echo json_encode(["status"=>"error", "msg"=>"Error: ".$e->getMessage()]);
}
?>