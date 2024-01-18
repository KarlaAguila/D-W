<?php
	// Inicia la sesión
	session_start();

	// Verifica si el usuario ha iniciado sesión
	if (!isset($_SESSION['usuario_id'])) {
		// Redirige a la página de inicio de sesión si no ha iniciado sesión
		header("Location: inicio.html");
		exit();
	}

	include("./php/conexion.php");

	$link = Conectar();

	// Establece el ID desde el cual quieres mostrar las flores
	$inicio_id = 26;

	// Consulta SQL para obtener todas las flores desde el ID establecido
	$query = "SELECT * FROM flores WHERE id >= $inicio_id";
	$result = mysqli_query($link, $query);
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

	<!--***************General**************** -->
	<main class="square">
		<div class="grid">
		<div class="square2">
				<img src="recursos/centromesa1.jpg" alt="Centros" height="200" class="img">
				<div>
			        <p class="Clasificacion">Centro de mesa</p>
			        <p class="Descripcion">Centro de mesa de flores artificiales blancas</p>
			        <p class="Precio"> $30.00</p>
			        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
	       		</div>
			</div>
			<div class="square2">
				<img src="recursos/ramo1.jpg" alt="Ramos" height="200" class="img">
				<div>
			        <p class="Clasificacion">Rosas</p>
			        <p class="Descripcion">Ramo de 40 rosas con dedicatoria incluida</p>
			        <p class="Precio"> $200.00</p>
			        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
	       		</div>
			</div>
			<div class="square2">
				<img src="recursos/maseta1.webp" alt="Macetas" height="200" class="img">
				<div>
			        <p class="Clasificacion">Orquidea</p>
			        <p class="Descripcion">Maceta de ceramica de Orquidea pequeña</p>
			        <p class="Precio"> $300.00</p>
			        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
	       		</div>
			</div>
			<div class="square2">
				<img src="recursos/maseta3.jpg" alt="Macetas" height="200" class="img">
				<div>
			        <p class="Clasificacion">Lavanda</p>
			        <p class="Descripcion">Maceta decorativa para escritorio de lavanda</p>
			        <p class="Precio"> $70.00</p>
			        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
	       		</div>
			</div>
			<div class="square2">
					<img src="recursos/Arco1.webp" alt="Arcos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Arcos</p>
				        <p class="Descripcion">Arco floral sencillo con rosas</p>
				        <p class="Precio"> $470.00</p>
				        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>	
			<div class="square2">
				<img src="recursos/centromesa2.jpeg" alt="Centros" height="200" class="img">
				<div>
			        <p class="Clasificacion">Centro de mesa</p>
			        <p class="Descripcion">Centro de mesa de madera con gerberas, rosas</p>
			        <p class="Precio"> $500.00</p>
			        <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
	       		</div>
			</div>
			<div class="square2">
				<img src="recursos/c1.jpg" alt="Ramos" height="200" class="img">
				<div>
				    <p class="Clasificacion">Ramo y peluche</p>
				    <p class="Descripcion">Ramo de una docena de rosas con peluche incluido</p>
				    <p class="Precio"> $300.00</p>
				    <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
		       	</div>
		    </div>
		    <div class="square2">
				<img src="recursos/ramo3.jpg" alt="Ramos" height="200" class="img">
				<div>
				    <p class="Clasificacion">Tulipanes</p>
				    <p class="Descripcion">Ramo de una docena de tulipanes rosas incluye dedicatoria</p>
				    <p class="Precio"> $800.00</p>
				    <a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
		       	</div>
		    </div>
			<?php
			// Mostrar todas las flores
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="square2">
						<img src="recursos/c2.jpg" alt="Ramos" height="200" class="img">
						<div>
							<p class="Clasificacion">' . $row['nombre_flor'] . '</p>
							<p class="Descripcion">' . $row['descripcion'] . '</p>
							<p class="Precio">$' . $row['precio'] . '</p>
							<a href="Comprar.php"><button type="button" class="Comprar"> Comprar</button></a>     
						</div>
					</div>';
			}
			?>
		</div>
	</main>

    
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>