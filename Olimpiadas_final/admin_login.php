<?php
header('Content-Type: application/json');
session_start();

$input = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los campos esperados
if (!isset($input['email']) || !isset($input['contrasena'])) {
    echo json_encode(['status' => 'error', 'msg' => 'Faltan campos']); // <-- Esta es la fuente del error
    exit();
}

$email = $input['email'];
$contrasena = $input['contrasena'];

// A partir de aquí iría tu lógica de autenticación real:
// 1. Conectar a la base de datos.
// 2. Buscar el usuario administrador por email.
// 3. Verificar la contraseña (usando password_verify si las hasheas).
// 4. Si las credenciales son correctas:
//    $_SESSION['admin_logged_in'] = true;
//    $_SESSION['admin_email'] = $email;
//    $_SESSION['admin_nombre'] = 'Nombre del Admin'; // O el nombre real de la DB
//    $_SESSION['admin_rol'] = 'admin'; // O el rol real de la DB
//    echo json_encode(['status' => 'ok', 'nombre' => 'Nombre del Admin', 'rol' => 'admin']);
// 5. Si las credenciales son incorrectas:
//    echo json_encode(['status' => 'error', 'msg' => 'Credenciales incorrectas.']);

// Ejemplo de lógica básica (REEMPLAZA CON TU LÓGICA DE BD REAL)
if ($email === 'admin@globe-co.com' && $contrasena === 'admin_1234') {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_email'] = $email;
    $_SESSION['admin_nombre'] = 'Admin Principal';
    $_SESSION['admin_rol'] = 'superadmin';
    echo json_encode(['status' => 'ok', 'nombre' => 'Admin Principal', 'rol' => 'superadmin']);
} else {
    echo json_encode(['status' => 'error', 'msg' => 'Credenciales incorrectas.']);
}

?>