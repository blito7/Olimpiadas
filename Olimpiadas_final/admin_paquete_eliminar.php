<?php
session_start();
// ... el resto del código
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['admin_isLoggedIn']) || !$_SESSION['admin_isLoggedIn']) {
    echo json_encode(['status' => 'fail', 'msg' => 'No autorizado']);
    exit;
}
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'] ?? '';
if (!$id) {
    echo json_encode(['status'=>'fail', 'msg'=>'ID no especificado']);
    exit;
}
require 'db.php';
$stmt = $conn->prepare("DELETE FROM paquetes WHERE id=?");
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo json_encode(['status'=>'ok', 'msg'=>'Paquete eliminado']);
} else {
    echo json_encode(['status'=>'fail', 'msg'=>'Error al eliminar paquete: ' . $conn->error]);
}
$stmt->close(); $conn->close();
?>