<?php
// admin_auth.php

// Inicia la sesión si aún no ha sido iniciada.
// Es crucial para mantener el estado de login del administrador.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- Configuración de la Base de Datos ---
// ASEGÚRATE de que estos datos sean correctos para tu entorno.
// Reemplaza 'tu_base_de_datos' con el nombre real de tu base de datos.
$servername = "localhost";
$username = "root";
$password = ""; // Si no tienes contraseña para root, déjalo vacío
$dbname = "bd_turismo"; // <--- ¡CAMBIA ESTO!

// --- Conexión a la Base de Datos ---
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión a la base de datos
if ($conn->connect_error) {
    // Si la conexión falla, devuelve un error JSON y termina la ejecución
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'msg' => 'Error de conexión a la base de datos: ' . $conn->connect_error]);
    exit();
}

// --- Verificación de Sesión de Administrador ---
// Esta parte asegura que solo los administradores logueados puedan acceder
// a los scripts que incluyen admin_auth.php.
// Puedes comentar esta sección temporalmente si te está dando problemas
// y quieres depurar otras cosas primero.
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    // Envía un estado 'unauthorized' para que el frontend pueda manejarlo
    echo json_encode(['status' => 'unauthorized', 'msg' => 'Acceso no autorizado. Por favor, inicia sesión como administrador.']);
    exit();
}

// Si todo está bien, la ejecución del script que incluyó admin_auth.php continuará.
// La conexión $conn ya estará disponible para consultas a la base de datos.
?>