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

	<!--***************Eventos**************** -->
	<main class="square">
		<div>
			<div class="Titulo"><h1 class="h1">CENTROS DE MESA</h1></div>
			<div class="grid">
				
				<div id="1"  class="square2">
					<img src="recursos/centromesa1.jpg" alt="Centros" height="200" class="img">
					<div>
				        <p class="Clasificacion">Centro de mesa</p>
				        <p class="Descripcion">Centro de mesa de flores artificiales blancas</p>
				        <p class="Precio"> $30.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(1); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
	       		<div id="2" class="square2">
					<img src="recursos/centromesa2.jpeg" alt="Centros" height="200" class="img">
					<div>
				        <p class="Clasificacion">Centro de mesa</p>
				        <p class="Descripcion">Centro de mesa de madera con gerberas, rosas</p>
				        <p class="Precio"> $500.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(2); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="3" class="square2">
					<img src="recursos/centromesa3.png" alt="Centros" height="200" class="img">
					<div>
				        <p class="Clasificacion">Centro de mesa</p>
				        <p class="Descripcion">Centro de mesa tipo linterna de madera con rosas blancas</p>
				        <p class="Precio"> $300.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(3); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="4" class="square2">
					<img src="recursos/centromesa14.webp" alt="Centros" height="200" class="img">
					<div>
				        <p class="Clasificacion">Centro de mesa</p>
				        <p class="Descripcion">Centro de mesa rosa con dorado para XV años </p>
				        <p class="Precio"> $300.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(4); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="5" class="square2">
					<img src="recursos/centromesa4.jpg" alt="Centros" height="200" class="img">
					<div>
				        <p class="Clasificacion">Centro de mesa</p>
				        <p class="Descripcion">Centro de mesa con rosas morado tipo lampara</p>
				        <p class="Precio"> $300.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(5); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
			</div>
			<div class="Titulo"><h1 class="h1">ARCOS</h1></div>
			<div class="grid">
				
				<div id="6" class="square2">
					<img src="recursos/Arco3.jpg" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral cuadrado tipo cascada</p>
				        <p class="Precio"> $600.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(6); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
				<div id="7" class="square2">
					<img src="recursos/Arco2.jpg" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral esponjoso con rosas </p>
				        <p class="Precio"> $700.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(7); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
				<div id="8" class="square2">
					<img src="recursos/Arco1.webp" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral sencillo con rosas</p>
				        <p class="Precio"> $470.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(8); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>	
				<div  id="9" class="square2">
					<img src="recursos/Arco4.jpg" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral sencillo tipo enredadera</p>
				        <p class="Precio"> $400.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(9); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
				<div id="10" class="square2">
					<img src="recursos/Arco5.png" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral circular sencillo</p>
				        <p class="Precio"> $670.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(10); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>		
			</div>		
		</div>
	</main>

    
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>