<?php
session_start();
header('Content-Type: application/json');
require_once 'db.php';

$input = json_decode(file_get_contents("php://input"), true);

if (!$input || !isset($input['email'], $input['contrasena'])) {
    echo json_encode(["status" => "error", "msg" => "Datos incompletos"]);
    exit;
}

$email = trim($input['email']);
$contrasena = $input['contrasena'];

$stmt = $pdo->prepare("SELECT id, nombre, email, contrasena, rol FROM usuarios WHERE email = ? LIMIT 1");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($contrasena, $user['contrasena'])) {
    $_SESSION['usuario_id'] = $user['id'];
    $_SESSION['usuario_nombre'] = $user['nombre'];
    $_SESSION['usuario_rol'] = $user['rol'];
    echo json_encode([
        "status" => "ok",
        "usuario_id" => $user['id'],
        "nombre" => $user['nombre'],
        "rol" => $user['rol']
    ]);
} else {
    echo json_encode(["status" => "error", "msg" => "Email o contraseña incorrectos"]);
}
?>