<?php
// db.php - Conexión a la base de datos MySQL usando PDO

$DB_HOST = "localhost";
$DB_NAME = "bd_turismo";
$DB_USER = "root";     // Cambia según tu configuración
$DB_PASS = "";         // Cambia según tu configuración

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_USER, $DB_PASS);
    // Configura el modo de errores de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Responde en formato JSON para errores de conexión
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "msg" => "Error de conexión a la base de datos: " . $e->getMessage()
    ]);
    exit;
}
?>