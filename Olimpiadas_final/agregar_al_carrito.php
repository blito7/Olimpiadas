<?php
// agregar_al_carrito.php - Añade un paquete al carrito del usuario

header("Content-Type: application/json");
require_once "db.php";

// Leer input JSON
$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['usuario_id']) || !isset($input['paquete_id']) || !isset($input['cantidad'])) {
    echo json_encode(["status" => "error", "msg" => "Datos incompletos."]);
    exit;
}

$usuario_id = intval($input['usuario_id']);
$paquete_id = intval($input['paquete_id']);
$cantidad = intval($input['cantidad']);

try {
    // Verificar si ya existe el paquete en el carrito del usuario
    $stmt = $pdo->prepare("SELECT id, cantidad FROM carrito WHERE usuario_id = :usuario_id AND paquete_id = :paquete_id");
    $stmt->execute([
        'usuario_id' => $usuario_id,
        'paquete_id' => $paquete_id
    ]);
    $item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($item) {
        // Ya existe: actualizar la cantidad
        $nueva_cantidad = $item['cantidad'] + $cantidad;
        $update = $pdo->prepare("UPDATE carrito SET cantidad = :cantidad WHERE id = :id");
        $update->execute([
            'cantidad' => $nueva_cantidad,
            'id' => $item['id']
        ]);
        echo json_encode([
            "status" => "ok",
            "msg" => "Cantidad actualizada en el carrito."
        ]);
    } else {
        // No existe: insertar nuevo
        $insert = $pdo->prepare("INSERT INTO carrito (usuario_id, paquete_id, cantidad) VALUES (:usuario_id, :paquete_id, :cantidad)");
        $insert->execute([
            'usuario_id' => $usuario_id,
            'paquete_id' => $paquete_id,
            'cantidad' => $cantidad
        ]);
        echo json_encode([
            "status" => "ok",
            "msg" => "Paquete agregado al carrito."
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "msg" => "Error al agregar al carrito: " . $e->getMessage()
    ]);
}
?>