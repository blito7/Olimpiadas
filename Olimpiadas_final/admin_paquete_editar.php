<?php
session_start();
// ... el resto del código
require_once "admin_auth.php";
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['id'], $input['nombre'], $input['descripcion'], $input['precio'], $input['imagen'])) {
    echo json_encode(["status"=>"error", "msg"=>"Faltan campos"]);
    exit;
}
try {
    $stmt = $pdo->prepare("UPDATE paquetes SET nombre=?, descripcion=?, precio=?, imagen=? WHERE id=?");
    $stmt->execute([$input['nombre'], $input['descripcion'], $input['precio'], $input['imagen'], $input['id']]);
    echo json_encode(["status"=>"ok", "msg"=>"Paquete actualizado"]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>$e->getMessage()]);
}
?>