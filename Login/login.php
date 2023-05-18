<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$users = json_decode(file_get_contents('users.json'), true); //trae lo del json a login
	if (array_key_exists($username, $users) && $users[$username] == $password) { //compara lo que el usuario
		//pone y lo compara con el array del json
		$_SESSION['username'] = $username; //si es true, lo manda al index
		header('Location: ../index.php');
		exit();
	} else {
		echo 'Invalid username or password';
	}
}
?>
