<?php
require_once('../classes/Registro.class.php');

// Obtener los datos del formulario de registro
$user = $_POST['user'];
$email = $_POST['correo'];
$password = $_POST['pass'];

// Crear una instancia de Registro
$registro = new Registro($user, $email, $password);

// Obtener el contenido actual del archivo usuarios.json
$usuariosJSON = file_get_contents("../usuarios.json"); // Ajusta la ruta si es necesario

// Decodificar el contenido JSON en un array asociativo
$usuariosArray = json_decode($usuariosJSON, true);

// Verificar si el usuario ya existe
foreach ($usuariosArray as $usuario) {
    if ($usuario['user'] === $registro->getUsername()) {
        echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
        header("refresh:4; url='registrar.html'");
        exit();
    }
}

// Agregar el nuevo registro al array de usuarios
$usuariosArray[] = [
    "user" => $registro->getUsername(),
    "correo" => $registro->getCorreo(),
    "password" => $registro->getPassword()
];

// Codificar el array de usuarios en formato JSON
$usuariosJSON = json_encode($usuariosArray, JSON_PRETTY_PRINT);

// Guardar el JSON actualizado en el archivo usuarios.json
file_put_contents("../usuarios.json", $usuariosJSON); // Ajusta la ruta si es necesario

echo "Registro guardado correctamente.";
header("refresh:4; url='login.html'");
?>