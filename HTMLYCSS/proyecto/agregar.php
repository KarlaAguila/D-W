<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirige a la página de inicio de sesión si no ha iniciado sesión
    header("Location: inicio.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="descripcion" content="Grupo de kpop conformado por 8 integrantes, lideres de la cuarta generación">
    <meta name="keywords" content="kpop, boy group, lideres de la cuarta generación">
    <title>Eterna Flor</title>
    <link rel="icon" href="recursos/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Enlace al archivo CSS -->
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel= "stylesheet"  href="css/bootstrap/css/bootstrap.css"> 
    <link rel= "stylesheet"  href="css/bootstrap/bootstrap-icons.css"> 
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href="https://fonts.cdnfonts.com/css/geffroy-eleonora" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="fondo">

    <!--****************************Barra de navegación*******************/-->
    
    <div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light barra">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.php">
                    <img src="recursos/logo2.png" alt="Logo" height="80" class="d-inline-block align-text-top">
                    
                </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse1">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item indice">
							<a href="home.php" class="nav-link">Inicio</a>
						</li>
						<li class="nav-item indice">
							<a href="Eventos.php" class="nav-link">Eventos</a>
						</li>
                        <li class="nav-item indice">
							<a href="Ramos.php" class="nav-link">Ramos</a>
						</li>
                        <li class="nav-item indice">
							<a href="Macetas.php" class="nav-link">Macetas</a>
						</li>

                        <li class="nav-item indice">
							<a href="destruir.php" class="nav-link">Cerrar Sesión</a>
						</li>
					</ul>				
				</div>
			</div>			
		</nav>
	</div>

    <br>
    <br>
    <!--****************************Agregar*******************/-->
    
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
                <div class="containerr2">
                    <h2 class="subtitulo3">AGREGAR RAMOS</h2>
                    <hr>
                    <form id="form" class="formm" method="post" action="./php/agregar_ramos.php">
                        <div class="form-controll">
                            <label for="nombre_flor" class="subtitulo2">Nombre del Ramo: </label>
                            <input type="text" placeholder="Rosas amarillas" id="nombre_flor" name="nombre_flor" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-controll">
                            <label for="descripcion" class="subtitulo2">Descripcion:</label>
                            <input type="text" placeholder="12 rosas amarillas..." id="descripcion" name="descripcion"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>  
                        </div>
                        <div class="form-controll">
                            <label for="precio" class="subtitulo2">Precio:</label>
                            <input type="text" placeholder="125.50" id="precio" name="precio"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>  
                        </div>
                        <div class="form-controll">
                            <label for="imagen" class="subtitulo2">Imagen:</label>
                            <input type="file" id="imagen" name="imagen"/>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
			<div class="col-md-4"></div>					
		</div>
	</div>

    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/agregar.js"></script>

</body>
</html>