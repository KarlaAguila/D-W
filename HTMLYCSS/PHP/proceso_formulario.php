<?php
    print("Script PHP <br>");

    $email = $_REQUEST['mail'];
    $pass = $_REQUEST['pass'];
    $oculto = $_REQUEST['oculto'];

    print("El correo introducido en el formulario es [$email] <br> ");
    print("La contraseña introducido en el formulario es [$pass] <br> ");
    print("El elemento oculto introducido en el formulario es [$oculto] <br> ");
    
    print("<br><hr><br>");

    if(isset($_REQUEST['genero'])){
        $genero = $_REQUEST['genero'];
        print("El genero seleccionado en el formulario es [$genero] <br> ");
    } else{
        print("No se selecciono ningún genero <br>");
    }
    
    print("<br><hr><br>");

    if(isset($_REQUEST['lp'])){
        $contador = count($_REQUEST['lp']);
        $lenguajes = $_REQUEST['lp'];
        print("Los lenguajes de programación seleccionados son: <br> ");
        for($i=0; $i<$contador; $i++){
            print($lenguajes[$i]."<br>");
        }
    } else{
        print("No se selecciono ningún lenguaje de programación <br>");
    }
    print("<br><hr><br>");
    
?>