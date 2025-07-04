<?php
// obtener_carrito.php - Devuelve los paquetes del carrito de un usuario

header("Content-Type: application/json");
require_once "db.php";

// Recibe usuario_id por POST (JSON)
$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['usuario_id'])) {
    echo json_encode(["status" => "error", "msg" => "Falta usuario_id."]);
    exit;
}

$usuario_id = intval($input['usuario_id']);

try {
    $stmt = $pdo->prepare(
        "SELECT c.paquete_id, p.nombre, p.precio, p.imagen, c.cantidad
         FROM carrito c
         JOIN paquetes p ON c.paquete_id = p.id
         WHERE c.usuario_id = :usuario_id"
    );
    $stmt->execute(['usuario_id' => $usuario_id]);
    $carrito = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "status" => "ok",
        "carrito" => $carrito
    ]);
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "msg" => "Error al obtener el carrito: " . $e->getMessage()
    ]);
}
?>