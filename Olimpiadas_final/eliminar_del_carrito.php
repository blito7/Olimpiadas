<?php
header("Content-Type: application/json");
require_once "db.php";
$input = json_decode(file_get_contents("php://input"), true);

if (!isset($input['usuario_id'], $input['paquete_id'])) {
    echo json_encode(["status" => "error", "msg" => "Datos incompletos"]);
    exit;
}

$usuario_id = (int)$input['usuario_id'];
$paquete_id = (int)$input['paquete_id'];

$stmt = $pdo->prepare("DELETE FROM carrito WHERE usuario_id = ? AND paquete_id = ?");
if ($stmt->execute([$usuario_id, $paquete_id])) {
    echo json_encode(["status" => "ok", "msg" => "Producto eliminado del carrito"]);
} else {
    echo json_encode(["status" => "error", "msg" => "No se pudo eliminar"]);
}
?>