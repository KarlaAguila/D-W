<?php
include("conexion.php");

$link = Conectar();

//verificamos si la solicitud es post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_flor = $_POST['nombre_flor'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];


    // Insertar el usuario en la base de datos
    $query = "INSERT INTO flores (nombre_flor, descripcion, precio, imagen) VALUES ('$nombre_flor', '$descripcion', '$precio',  '$imagen')";
    $result = mysqli_query($link, $query);

    if ($result) {
        // Redirigir al usuario después del registro exitoso
        header("Location: ../home.php");
        exit();
    } else {
        // Manejar el caso de error en la consulta SQL
        header("Location: ../error.html");
        exit();
    }
}
?>