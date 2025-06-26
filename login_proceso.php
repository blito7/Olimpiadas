<?php
session_start();
include('config/db.php');

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

if (str_starts_with($contrasena, 'admin_')) {
    $clave_real = substr($contrasena, 6);
    $stmt = $pdo->prepare("SELECT * FROM Usuarios_Internos WHERE email_usuario = ? LIMIT 1");
    $stmt->execute([$email]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($clave_real, $admin['contraseña_usuario'])) {
        $_SESSION['usuario_id'] = $admin['id_usuario'];
        $_SESSION['usuario_nombre'] = $admin['nombre_usuario'];
        $_SESSION['rol'] = $admin['rol'];
        header('Location: administrador/index.php');
        exit;
    } else {
        echo "❌ Datos de administrador incorrectos";
        exit;
    }
} else {
    $stmt = $pdo->prepare("SELECT * FROM Clientes WHERE email_cliente = ? LIMIT 1");
    $stmt->execute([$email]);
    $cliente = $stmt->fetch();

    if ($cliente && password_verify($contrasena, $cliente['contraseña_cliente'])) {
        $_SESSION['cliente_id'] = $cliente['id_cliente'];
        $_SESSION['cliente_nombre'] = $cliente['nombre_cliente'];
        header('Location: clientes/index.php');
        exit;
    } else {
        echo "❌ Datos de cliente incorrectos";
        exit;
    }
}
?>
