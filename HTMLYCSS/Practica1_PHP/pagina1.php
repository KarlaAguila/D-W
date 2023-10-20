<!DOCTYPE html>
<html lang="en">
<head> <!--Lo que no es visible en la pagina-->
    <meta charset="UTF-8"/>
    <title>Primera pagina web php</title>
</head>
<body> <!--Lo que si es visible en la pagina-->
    <h1>Esta linea de código esta en HTML </h1>
    <?php
        print("<h2>Esta es una linea de código en PHP</h2>");
        echo("<h2>Esta es otra linea de código en PHP</h2>");
    ?>
    <hr>
    <h3> Esta es otra linea de Texto</h3>
    <p>
        Este texto esta dentro de un párrafo  <?php print("y esta linea esta en código PHP");?>
    </p>
</body>
</html>