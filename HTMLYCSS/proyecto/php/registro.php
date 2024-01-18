<?php
include("conexion.php");

$link = Conectar();

//verificamos si la solicitud es post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    // Insertar el usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre_usuario, correo_electronico, contrasena) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($link, $query);

    if ($result) {
        // Redirigir al usuario después del registro exitoso
        header("Location: ../registro_exitoso.html");
        exit();
    } else {
        // Manejar el caso de error en la consulta SQL
        header("Location: ../error.html");
        exit();
    }
}
?>
