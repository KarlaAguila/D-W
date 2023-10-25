<?php
    include("operaciones.php");
?>
<!DOCTYPE html>
<?php
    include("funciones.php");
?>
<html lang="en">
<head> <!--Lo que no es visible en la pagina-->
    <meta charset="UTF-8"/>
    <title>Primera pagina web php</title>
</head>
<body> <!--Lo que si es visible en la pagina-->
    <?php
        function suma($a, $b){
            $r = $a + $b ; 
            return $r;
        }

        function resta($a, $b){
            $r = $a - $b ; 
            return $r;
        }
    ?>


    <h2>Ejemplos de programación en PHP </h2>
    <h3>Valores enteros</h3>
    <?php
        $a = 123456; //Numero entero positivo
        $b = -123456; #Numero entero negativo
        $c = 0123; /*Numero en base octal */
        $d = 0x12; /*Numero en base hexadecimal */
        print("El valor de la variable a es: $a");
    ?>

    <p>El valor de la variable b es: <?php print($b) ?> </p>
    <p>El valor de la variable c es: <?php print($c) ?></p>
    <p>El valor de la variable d es: <?php print($d) ?></p>
    <hr>

    <h3>Valores decimales</h3>
    <?php
        $a = 1.234; 
        $b = -1234;
        $c = 1.2e3;
    ?>

    <p>El valor de la variable a es: <?php print($a) ?> </p>
    <p>El valor de la variable b es: <?php echo($b) ?> </p>
    <p>El valor de la variable c es: <?php echo($c) ?></p>
    <hr>

    <h3>Valores decimales</h3>
    <?php
        print("Hola mundo \n Esta es otra linea de Texto <br>");
        print("Hola mundo <br> Esta es otra linea de Texto <br>");
        print("\t Esta linea de Texto, tiene un tabulador <br>");
        print("<span style='margin-left: 30px;'> Esta linea de Texto, tiene un tabulador </span>");
        print("El símbolo de peso con codigo especial de PHP es \$ <br>");
        print("El simbolo de diagonal invertida con codigo especial de PHP es \\ <br>");
        print("El simbolo de comillas con codigo especial de PHP es \" <br>");
    ?>
    <hr>
    <h3>Cadenas</h3>
    <?php
        $x = "Juna"; 
        $s = "Hola $x";
        $t = 'Hola $x'; /*Imprime texto tal cual lo estamos interpretando */

        print("El contenido de la variable x es [$x] <br>");
        print("El contenido de la variable s es [$s] <br>");
        print("El contenido de la variable t es [$t] <br>");
    ?>
    
    <hr>

    <h3>Concatenación de String</h3>
    <?php
        $x = "Hola"; 
        $y = "Mundo";
        $s = $x.$y;
        $t = $x." "."$y";

        print("El contenido de la variable x es [$x] <br>");
        print("El contenido de la variable y es [$y] <br>");
        print("El contenido de la variable s es [$s] <br>");
        print("El contenido de la variable t es [$t] <br>");
        
    ?>
    
    <hr>

    <h3>Arrays (Vectores)</h3>
    <?php

        $dia[0] = "Domingo"; 
        $dia[1] = "Lunes"; 
        $dia[2] = "Martes"; 
        $dia[3] = "Miércoles"; 
        $dia[4] = "Jueves"; 
        $dia[5] = "Viernes"; 
        $dia[6] = "Sábado"; 

        print("El contenido del vector dia [3] es [$dia[3]] <br>");
        print("El contenido del vector dia [5] es [" . $dia[5] . "] <br>");   
        print("<br/> <br/> <br/> <br/>");
        for($i=0; $i<7; $i++)
        {
            print("El contenido del vector dia [$i] es [" . $dia[$i] . "] <br>");
        }
        print("<br><br><br><br>");
        for($i=0; $i<10; $i++)
        {
            $numeros[]=$i;
        }

        for($i=0; $i<10; $i++)
        {
            print("El contenido del vector numeros [$i] es [" . $numeros[$i] . "] <br/>");
        }
    ?>

    <hr>

    <hr>
    <h3>Funciones</h3>
    <?php
        $res = suma(5,5);
        print("El resultado de la función SUMA es [$res] <br>");
        $res = resta(10,5);
        print("El resultado de la función RESTA es [$res] <br>");
        $res = multiplica(3,5);
        print("El resultado de la función MULTIPLICA es [$res] <br>");
        $res = divide(20,5);
        print("El resultado de la función DIVIDE es [$res] <br>");
    ?>

    <hr>
    <h2>Constantes</h2>
    <?php 
        define("PI", 3.141516);
        print("El valor PI es =>" . PI);    ?>
    
    <p>El valor de la constante PI es: [ <?php print(PI); ?>]</p>

    <hr>
    <h2>Estructuras de Control</h2>
    <?php 
        print("********************* IF *************** <br>");
        $a = 20;
        $b = 30;
        $c = 20;

        if($a < $b)
            print("El contenido de la variable a [$a], es menor que la variable b [$b] <br>");
        
        if($b > $a) 
        {
            print("El contenido de la variable b[$b], es mayor que la variable a[$a] <br>");
        }

        if($b < $c) 
        {
            print("El contenido de la variable b[$b], es menor que la variable c[$c] <br>");
        }
        else 
        {
            print("El contenido de la variable b[$b], es mayor que la variable c[$c] <br>");
        }

        if($a > $c) 
        {
            print("El contenido de la variable a[$a], es mayor que la variable c[$c] <br>");
        }
        elseif($a < $c)
        {
            print("El contenido de la variable a[$a], es menor que la variable c[$c] <br>");
        }
        else 
        {
            print("El contenido de la variable a[$a], es igual que la variable c[$c] <br>");
        }

        print(" <hr><br>********************* DO - WHILE *************** <br>");

        //primero ejecuta y luego pregunta 
        $i = 20; 

        do {
            print("Iteración [$i]<br>");
            $i++;
        }while($i <= 30);

        print(" <hr><br>*********************  WHILE *************** <br>");

        //primero pregunta y luego ejecuta 
        $i = 0; 

        while ($i <= 20){
            print("Iteración [$i]<br>");
            $i++;
        }

        print(" <hr><br>*********************  SWITCH *************** <br>");

        $op = '-';

        switch($op)
        {
            case '+': 
                print("La operación seleccionada es la SUMA <br>");
                break;
            case '-': 
                print("La operación seleccionada es la RESTA <br>");
                break;
                
            case '*': 
                print("La operación seleccionada es la MULTIPLICACIÓN <br>");
                break;
            case '/': 
                print("La operación seleccionada es la DIVISION <br>");
                break;
            
            default: 
                print("La operación no fue encontrada <br>");
                break;
        }

    ?>

    <hr>
    <h2>Asignaciones</h2>
    <p>El valor de la variable x es [<?php print(x); ?>]</p>

</body>
</html>