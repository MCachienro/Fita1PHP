<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Action Page</title>
</head>
<body>
<?php
// Recoger los datos enviados desde el formulario (POST)
$usuario = $_POST['fname'] ?? '';
$claveIntroducida = $_POST['lname'] ?? '';

// Diccionario de usuarios y contraseñas
$usuarios = [
    "Marc" => "miclave123",
    "Ana" => "pass2025",
    "Luis" => "abc123"
];

// Obtener la contraseña guardada para el usuario o null si no existe
$claveGuardada = $usuarios[$usuario] ?? null;

if ($claveGuardada === $claveIntroducida && $usuario !== '') {
    echo "¡Hola, $usuario! Contraseña correcta.";
} else {
    echo "Contraseña incorrecta. Inténtalo de nuevo.";
}
?>


</body>
</html>
