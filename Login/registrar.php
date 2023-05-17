<?php
    require_once("../classes/Registro.class.php");
    $url =__DIR__ . "/users.json"; 
    $userList = [];
    if(file_exists($url)){ 
        $usersJson = file_get_contents($url); 
        $users = json_decode($cusersJson);
     
        foreach ($users as $user) {                                   
            $item = new Registro(
                $user ->user,
                $user ->correo,
                $user ->password
            );
            array_push($userList, $item);
        }
    } 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrar.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Registrar</title>
</head>
<body>
    <div class="box">
        <form action="altaRegistro.php" method="post">
            <h1>COFFE SWEET</h1>
            <div class="input-box">
            <input type="text" required name="user" placeholder="ABCDEFGH12345678" pattern="[A-Za-z0-9]{4,16}">
                <span>NOMBRE DE USUARIO</span>
                <i></i>
            </div>
            <div class="input-box">
                <input type="email" name="correo">
                <span>Correo electronico</span>
                <i></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" required>
                <span>CONTRASEÑA</span>
                <i></i>
            </div>
                <p>Ya tienes una cuenta?<a href="./login.html">Iniciar sesion</a></p>
            <input type="submit" class="cta" name="ok" value="Registrar">
        </form>
    </div>
</body>
</html>