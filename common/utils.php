<?php 
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$conn = new mysqli('localhost', 'root', '', 'pruebab1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión a la base' . $conn->connect_error;
	exit;
}

if ($_SERVER['SCRIPT_NAME'] != '../index.php' && $_SERVER['SCRIPT_NAME'] != '../php/process_login.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . '../index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '../index.php' && isset($_SESSION['user']) ) {

	redirect($_SERVER["HTTP_HOST"] . '../home.php');
}