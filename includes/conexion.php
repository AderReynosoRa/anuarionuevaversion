<?php
	// conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'udemy';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

	mysqli_query($db, "SET NAMES 'utf8'");

  // iniciar la sesion
  session_start();	

?>