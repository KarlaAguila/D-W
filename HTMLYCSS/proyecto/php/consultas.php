<?php
    include("conexion.php");

    $link = Conectar();

    $query = "SELECT * FROM usuarios";
    $consulta = mysqli_query($link,$query);
    $datos = mysqli_num_rows($consulta);

    print("No. Registros => $datos <br><br>");
?>