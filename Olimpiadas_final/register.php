<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Aquí deberías guardar el usuario en la base de datos
    // Este es un ejemplo simple sin base de datos

    // Redirigir al index.html
    header("Location: http://localhost/Olimpiadas_Final/index.html");
    exit;
}
?>
