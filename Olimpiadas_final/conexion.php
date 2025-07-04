<?php
$host = "localhost";
$db = "bd_turismo";
$user = "root";
$pass = "";

// Conexión
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>