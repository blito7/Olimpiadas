<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "msg" => "Método no permitido"]);
    exit;
}

$conexion = new mysqli("localhost", "root", "", "bd_turismo");

if ($conexion->connect_error) {
    echo json_encode(["status" => "error", "msg" => "Error de conexión"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

$correo = $data['email'];
$contrasena = $data['password'];

$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($contrasena, $usuario['contrasena'])) {
        $_SESSION['usuario'] = $usuario;
        echo json_encode([
            "status" => "ok",
            "nombre" => $usuario['nombre'],
            "rol" => $usuario['rol']
        ]);
    } else {
        echo json_encode(["status" => "error", "msg" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["status" => "error", "msg" => "Usuario no encontrado"]);
}

$stmt->close();
$conexion->close();
