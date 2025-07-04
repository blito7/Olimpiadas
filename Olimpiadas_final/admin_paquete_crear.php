<?php
session_start();
// ... el resto del código
require_once "admin_auth.php";
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['nombre'], $input['descripcion'], $input['precio'], $input['imagen'])) {
    echo json_encode(["status"=>"error", "msg"=>"Faltan campos"]);
    exit;
}
try {
    $stmt = $pdo->prepare("INSERT INTO paquetes (nombre, descripcion, precio, imagen) VALUES (?, ?, ?, ?)");
    $stmt->execute([$input['nombre'], $input['descripcion'], $input['precio'], $input['imagen']]);
    echo json_encode(["status"=>"ok", "msg"=>"Paquete creado"]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>$e->getMessage()]);
}
?>