<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$users = json_decode(file_get_contents('users.json'), true);
	if (array_key_exists($username, $users) && $users[$username] == $password) {
		$_SESSION['username'] = $username;
		header('Location: ../index.php');
		exit();
	} else {
		echo 'Invalid username or password';
	}
}
?>
