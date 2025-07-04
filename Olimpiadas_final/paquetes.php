<?php
// paquetes.php - Devuelve la lista de paquetes turísticos en JSON

header("Content-Type: application/json");
require_once "db.php";

try {
    $stmt = $pdo->query("SELECT id, nombre, descripcion, precio, imagen FROM paquetes");
    $paquetes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "status" => "ok",
        "paquetes" => $paquetes
    ]);
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "msg" => "Error al obtener los paquetes: " . $e->getMessage()
    ]);
}
?>