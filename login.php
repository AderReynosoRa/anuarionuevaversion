<?php
// Iniciar la sesion y la conexion a la bd
  require_once 'includes/conexion.php';
//Recoger datos del formulario
  if(isset($_POST)){
  	// Borrar error antiguo
  	if (isset($_SESSION['error_login'])) {
  		session_unset($_SESSION['error_login']);
  	}
  	//Recoger datos del formulario
  	$email = trim($_POST['email']);
  	$password = $_POST['password']; 

  	//Consulta para comprobar las credenciales del usuario
  	$sql = "SELECT * FROM usuarios WHERE email ='$email'";
  	$login = mysqli_query($db, $sql);

  	if ($login && mysqli_num_rows($login) == 1) {
  		$usuario = mysqli_fetch_assoc($login);
  		// comprobar la contraseña/cifrar
  		$verify = password_verify($password, $usuario['password']);

  		if ($verify) {
  			//Utilizar una sesión para guardar los datos del usuario logueado

  		}else{ 
  		// si algo falla enviar una sesion con el fallo
  		$_SESSION['error_login']= "Login incorrecto!!";	
  		}
  		  	
  	}else{
  		//mensaje de error
  		$_SESSION['error_login']= "Login incorrecto!!";
  	}

  	}  


//Consulta para comprobar las credenciales del usuario
//Redirigir al index.php
  		header('Location: muybien.php');

?>