<?php
	
	include("conexion.php");

	$link = Conectar();

	$email = $_POST['email'];
    $password = $_POST['password'];

    //print("El correo recibido es: [$email] <br>");
    //print("El password recibido es: [$password] <br>");


	$query = "SELECT * FROM usuarios WHERE correo_electronico = '" . $email ."'";

	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	$fila = mysqli_fetch_row($consulta);

	

	if ($datos == 0) {
		header("Location: ../error.html");
		exit();
	}
	elseif ($fila[3] != $password) {
		header("Location: ../login.html");
		exit();
	}
	elseif($fila[2] == $email && $fila[3] == $password){
		// guardar el ID del usuario en una sesión para usarlo en otras páginas
		session_start();
		$_SESSION['usuario_id'] = $fila[0];
		header("Location: ../home.php");
		exit();
	}


?>
