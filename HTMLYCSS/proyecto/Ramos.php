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
			<div class="Titulo"><h1 class="h1">RAMOS</h1></div>
			<div class="grid">
				
				<div id="11" class="square2">
					<img src="recursos/ramo1.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Rosas</p>
				        <p class="Descripcion">Ramo de 40 rosas con dedicatoria incluida</p>
				        <p class="Precio"> $200.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(11); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
	       		<div id="12" class="square2">
					<img src="recursos/c2.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Rosas Moradas</p>
				        <p class="Descripcion">Ramo media docena de Rosas Moradas y dedicatoria</p>
				        <p class="Precio"> $100.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(12); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="13" class="square2">
					<img src="recursos/c1.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Ramo y peluche</p>
				        <p class="Descripcion">Ramo de una docena de rosas con peluche incluido</p>
				        <p class="Precio"> $300.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(13); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="14" class="square2">
					<img src="recursos/ramo2.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Rosas Rojas</p>
				        <p class="Descripcion">Ramo buchon de 100 rosas rojas con dedicatoria</p>
				        <p class="Precio"> $400.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(14); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
		       	<div id="15" class="square2">
					<img src="recursos/ramo3.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Tulipanes</p>
				        <p class="Descripcion">Ramo de una docena de tulipanes rosas incluye dedicatoria</p>
				        <p class="Precio"> $800.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(15); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
				<div id="16" class="square2">
					<img src="recursos/ramo4.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Tulipanes</p>
				        <p class="Descripcion">Ramo de 36 Tulipanes bicolor</p>
				        <p class="Precio"> $2400.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(16); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
		       	</div>
				<div id="17" class="square2">
					<img src="recursos/ramo5.jpg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Girasoles</p>
				        <p class="Descripcion">Ramo de 8 girasoles + dedicatoria</p>
				        <p class="Precio"> $540.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(17); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
				<div id="18" class="square2">
					<img src="recursos/ramos6.jpeg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Girasoles</p>
				        <p class="Descripcion">Ramo de 10 girasoles y 12 rosas</p>
				        <p class="Precio"> $1470.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(18); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>	
				<div id="19" class="square2">
					<img src="recursos/ramo7.png" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Rosas</p>
				        <p class="Descripcion">200 rosas incluye chocolate Ferrero</p>
				        <p class="Precio"> $6000.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(19); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>
				<div id="20" class="square2">
					<img src="recursos/ramo8.jpeg" alt="Ramos" height="200" class="img">
					<div>
				        <p class="Clasificacion">Ramo</p>
				        <p class="Descripcion">Ramo de novia rosas blancas y rosas</p>
				        <p class="Precio"> $670.00</p>
				        <a href="Comprar.php" onclick="agregarAlCarrito(20); return false;"><button type="button" class="Comprar"> Comprar</button></a>     
		       		</div>
				</div>		
			</div>		
		</div>
	</main>


<script>
    function agregarAlCarrito(macetaId) {
        // Aquí puedes realizar una solicitud AJAX para enviar macetaId al servidor
        fetch('agregar_al_carrito.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                maceta_id: macetaId,
            }),
        })
        .then(response => response.json())
        .then(data => {
            // Aquí puedes manejar la respuesta del servidor, si es necesario
            console.log(data);
			// Redirige al usuario a compras.html si la respuesta es exitosa
            if (data.success) {
                window.location.href = 'compras.html';
            } else {
                // Puedes mostrar un mensaje de error u otra lógica en caso de fallo
                console.error(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

<script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>