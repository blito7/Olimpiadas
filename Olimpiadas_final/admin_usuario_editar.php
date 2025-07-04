<?php
session_start();
// ... el resto del código
require_once "admin_auth.php";
require_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);
if (!$input || !isset($input['id'], $input['nombre'], $input['email'], $input['rol'])) {
    echo json_encode(["status"=>"error", "msg"=>"Faltan campos"]);
    exit;
}
try {
    if (!empty($input['contrasena'])) {
        $hash = password_hash($input['contrasena'], PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE usuarios SET nombre=?, email=?, contrasena=?, rol=? WHERE id=?");
        $stmt->execute([$input['nombre'], $input['email'], $hash, $input['rol'], $input['id']]);
    } else {
        $stmt = $pdo->prepare("UPDATE usuarios SET nombre=?, email=?, rol=? WHERE id=?");
        $stmt->execute([$input['nombre'], $input['email'], $input['rol'], $input['id']]);
    }
    echo json_encode(["status"=>"ok", "msg"=>"Usuario actualizado"]);
} catch(Exception $e) {
    echo json_encode(["status"=>"error", "msg"=>$e->getMessage()]);
}
?>