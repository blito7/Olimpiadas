<?php
// Trae las órdenes del usuario autenticado

header("Content-Type: application/json");
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['usuario_id'])) {
    echo json_encode(["status"=>"error", "msg"=>"Falta usuario_id"]);
    exit;
}
$usuario_id = intval($input['usuario_id']);

try {
    // Obtener órdenes
    $ordenes = [];
    $stmt = $pdo->prepare("SELECT * FROM ordenes WHERE usuario_id = :usuario_id ORDER BY fecha DESC");
    $stmt->execute(['usuario_id'=>$usuario_id]);
    $ordenes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Por cada orden, traer los items
    foreach ($ordenes as &$orden) {
        $stmt_items = $pdo->prepare(
            "SELECT oi.*, p.nombre, p.imagen 
             FROM orden_items oi 
             JOIN paquetes p ON oi.paquete_id = p.id 
             WHERE oi.orden_id = :orden_id"
        );
        $stmt_items->execute(['orden_id'=>$orden['id']]);
        $orden['items'] = $stmt_items->fetchAll(PDO::FETCH_ASSOC);
    }
    echo json_encode(["status"=>"ok", "ordenes"=>$ordenes]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>"Error: ".$e->getMessage()]);
}
?>