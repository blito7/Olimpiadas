<?php
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['admin_isLoggedIn']) || !$_SESSION['admin_isLoggedIn']) {
    echo json_encode(['status' => 'fail', 'msg' => 'No autorizado']);
    exit;
}
$data = json_decode(file_get_contents('php://input'), true);
$nombre = $data['nombre'] ?? '';
$descripcion = $data['descripcion'] ?? '';
$precio = $data['precio'] ?? '';

if (!$nombre || !$descripcion || !$precio) {
    echo json_encode(['status'=>'fail', 'msg'=>'Faltan datos']);
    exit;
}

require 'db.php'; // crea tu conexión $conn aquí

$stmt = $conn->prepare("INSERT INTO paquetes (nombre, descripcion, precio) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $nombre, $descripcion, $precio);

if ($stmt->execute()) {
    echo json_encode(['status'=>'ok', 'msg'=>'Paquete agregado correctamente']);
} else {
    echo json_encode(['status'=>'fail', 'msg'=>'Error al agregar paquete: ' . $conn->error]);
}
$stmt->close();
$conn->close();
?>