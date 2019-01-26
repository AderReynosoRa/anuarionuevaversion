<?php

if(isset($_POST)){
	// conexion a la base de datos
	require_once 'includes/conexion.php';
	// iniciar session
	if(!isset($_SESSION)){
	session_start();
	}
	//RECOGER LOS VALORES DEL FORMULARIO DE REGISTRO
	$nombre =isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos =isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email =isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$password =isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    
    // array de errores
    $errores = array();

	// Validar el nombre
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	} else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es valido";
	}
	// validar los apellidos
	if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $nombre)) {
		$apellidos_validado = true;
	} else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son validos";
	}
	// Validar el Email
	if (!empty($apellidos) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
	} else{
		$email_validado = false;
		$errores['email'] = "Lo siento amig@ el Email no es valido";
	}
	// Validar contraseña
	if (!empty($password)) {
		$password_validado = true;
	} else{
		$email_validado = false;
		$errores['password'] = "El password esta vacio";
	}
	$guardar_usuario = false;
	if (count($errores) == 0) {
		$guardar_usuario = true;
		// Cifrar contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
		//INSERTAR USUARIO EN LA TABLA DE USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
		$guardar= mysqli_query($db, $sql);
		if ($guardar) {
			$_SESSION['completado'] = "el registro se ha completado con éxito";
		}else{
			$_SESSION['errores']['general'] ="Falló al guardar el usuario";
		}

	} else{
		$_SESSION['errores'] = $errores;
		
	}
	header('Location: index.php');


}

?>



