<?php
// Mock de API de pago: recibe { orden_id }, simula pago y marca la orden como pagada

header("Content-Type: application/json");
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['orden_id'])) {
    echo json_encode(["status"=>"error", "msg"=>"Falta orden_id"]);
    exit;
}
$orden_id = intval($input['orden_id']);

try {
    // Simula un pago exitoso (siempre paga!)
    $stmt = $pdo->prepare("UPDATE ordenes SET estado='pagado' WHERE id=:orden_id");
    $stmt->execute(['orden_id'=>$orden_id]);

    echo json_encode(["status"=>"ok", "msg"=>"Pago exitoso. ¡Gracias por tu compra!", "orden_id"=>$orden_id]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>"Error en el pago: ".$e->getMessage()]);
}
?>