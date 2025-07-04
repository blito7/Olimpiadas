<?php
header("Content-Type: application/json");
require_once "db.php"; // Asegúrate de tener este archivo para la conexión PDO

// Recibe los datos como JSON
$input = json_decode(file_get_contents("php://input"), true);

if (!$input || !isset($input['nombre'], $input['email'], $input['contrasena'])) {
    echo json_encode(["status" => "error", "msg" => "Faltan campos obligatorios"]);
    exit;
}

$nombre = trim($input['nombre']);
$email = strtolower(trim($input['email']));
$contrasena = $input['contrasena'];

// Validaciones básicas
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "msg" => "Email inválido."]);
    exit;
}

if (strlen($contrasena) < 6) {
    echo json_encode(["status" => "error", "msg" => "La contraseña debe tener al menos 6 caracteres."]);
    exit;
}

try {
    // Verifica si ya existe ese email
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email=?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(["status" => "error", "msg" => "El email ya está registrado."]);
        exit;
    }

    // Hashea la contraseña
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Inserta el usuario (por defecto rol "user")
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, contrasena, rol) VALUES (?, ?, ?, 'user')");
    $stmt->execute([$nombre, $email, $hash]);

    echo json_encode(["status" => "ok", "msg" => "Usuario registrado correctamente"]);
} catch (Exception $e) {
    echo json_encode(["status" => "error", "msg" => "Error en el registro: " . $e->getMessage()]);
}
?>