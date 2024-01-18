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
<body class="fondo">

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

	<!--***************Ramos**************** -->
	<main class="square">
		<div>
			<div class="Titulo"><h1 class="h1">MACETAS</h1></div>
			<div class="grid">
				
				<div id="21" class="square2">
					<img src="recursos/maseta1.webp" alt="Macetas" height="200" class="img">
					<div>
				        <p class="Clasificacion">Orquidea</p>
				        <p class="Descripcion">Maceta de ceramica de Orquidea pequeña</p>
				        <p class="Precio"> $300.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(22); return false;"><button type="button" class="Comprar"> Comprar</button></a>        
		       		</div>
				</div>

				<div id="22" class="square2">
					<img src="recursos/maseta3.jpg" alt="Macetas" height="200" class="img">
					<div>
				        <p class="Clasificacion">Lavanda</p>
				        <p class="Descripcion">Maceta decorativa para escritorio de lavanda</p>
				        <p class="Precio"> $70.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(22); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
		       	<div id="23" class="square2">
					<img src="recursos/macetas4.jpg" alt="Macetas" height="200" class="img">
					<div>
				        <p class="Clasificacion">Bugambilia</p>
				        <p class="Descripcion">Maceta de Bugambilia</p>
				        <p class="Precio"> $40.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(23); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="24" class="square2">
					<img src="recursos/maceta3.jpg" alt="Macetas" height="200" class="img">
					<div>
				        <p class="Clasificacion">Petunia</p>
				        <p class="Descripcion">Maceta de Petunia blanca</p>
				        <p class="Precio"> $30.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(24); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="25" class="square2">
					<img src="recursos/suculenta.jpg" alt="Macetas" height="200" class="img">
					<div>
				        <p class="Clasificacion">Suculentas</p>
				        <p class="Descripcion">Maceta de suculentas pequeña</p>
				        <p class="Precio"> $200.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(25); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>					
			</div>		
		</div>
	</main>

    
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>