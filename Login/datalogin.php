<?php

// Obtener los datos del formulario de inicio de sesión
$user = $_POST['user'];
$password = $_POST['pass'];

// Obtener el contenido del archivo usuarios.json
$usuariosJSON = file_get_contents("../usuarios.json"); // Ajusta la ruta si es necesario

// Decodificar el contenido JSON en un array asociativo
$usuariosArray = json_decode($usuariosJSON, true);

// Verificar las credenciales ingresadas por el usuario
$loggedIn = false;

foreach ($usuariosArray as $usuario) {
    if ($usuario['user'] === $user && $usuario['password'] === $password) {
        $loggedIn = true;
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario['user'] . "!";
        header("refresh:3; url='../index.php'");
        // Realizar acciones adicionales después del inicio de sesión exitoso
        break;
    }
}

if (!$loggedIn) {
    echo "Credenciales de inicio de sesión inválidas.";
    header("refresh:4; url='login.html'");
}

?>