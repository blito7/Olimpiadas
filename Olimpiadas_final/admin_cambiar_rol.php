<?php
require_once "admin_auth.php";
require_once "db.php";

try {
    $stmt = $pdo->query("SELECT o.id, u.nombre as usuario, o.total, o.estado, o.fecha FROM ordenes o JOIN usuarios u ON o.usuario_id = u.id ORDER BY o.fecha DESC");
    $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(["status"=>"ok", "reservas"=>$reservas]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>$e->getMessage()]);
}
?>