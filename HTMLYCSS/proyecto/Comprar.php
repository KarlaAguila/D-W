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
    <link rel= "stylesheet"  href="css/bootstrap/css/bootstrap.css"> 
    <link rel= "stylesheet"  href="css/bootstrap/bootstrap-icons.css"> 
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <!--****************************Barra de navegación*******************/-->
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light barra">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
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
							<a href="agregar.php" class="nav-link">AGREGAR</a>
						</li>
                        <li class="nav-item indice">
                            <a href="destruir.php" class="nav-link">Cerrar Sesión</a>
                        </li>
                    </ul>               
                </div>
            </div>          
        </nav>
    </div>
    
    <div class="formulario">
       <form class="formulario">
            <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
            <input class="formulario__submit" type="submit" value="Agregar al Carrito">
        </form>
    </div>
</body>

</html>