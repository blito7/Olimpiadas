<?php
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['admin_isLoggedIn']) || !$_SESSION['admin_isLoggedIn']) {
    echo json_encode(['status' => 'fail', 'msg' => 'No autorizado']);
    exit;
}
$data = json_decode(file_get_contents('php://input'), true);
$nombre = $data['nombre'] ?? '';
$email = $data['email'] ?? '';
$contrasena = $data['contrasena'] ?? '';
$rol = $data['rol'] ?? '';

if (!$nombre || !$email || !$contrasena || !$rol) {
    echo json_encode(['status'=>'fail', 'msg'=>'Faltan datos']);
    exit;
}

require 'db.php'; // crea tu conexión $conn aquí

$hash = password_hash($contrasena, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contrasena, rol) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $hash, $rol);

if ($stmt->execute()) {
    echo json_encode(['status'=>'ok', 'msg'=>'Usuario agregado correctamente']);
} else {
    echo json_encode(['status'=>'fail', 'msg'=>'Error al agregar usuario: ' . $conn->error]);
}
$stmt->close();
$conn->close();
?>