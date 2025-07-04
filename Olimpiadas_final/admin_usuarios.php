<?php
session_start();
// ... el resto del código
header('Content-Type: application/json');
echo json_encode([
    "status" => "ok",
    "usuarios" => [
        ["id"=>1, "nombre"=>"Juan Pérez", "email"=>"juan@demo.com", "rol"=>"admin"],
        ["id"=>2, "nombre"=>"Ana López", "email"=>"ana@demo.com", "rol"=>"user"]
    ]
]);
?>