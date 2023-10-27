<!DOCTYPE html>
<html lang="en">
<head> <!--Lo que no es visible en la pagina-->
    <meta charset="UTF-8"/>
    <title>Ejemplos Formulario</title>
    <link rel="stylesheet"  type="text/css" href="../CSS/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="css/estilos.css">
</head>
<body> <!--Lo que si es visible en la pagina-->
    <div class="container">
        <div class="principal">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <h1 class="text-center">Ejemplos de formulario HTML y PHP</h1>
                    <form action="proceso_formulario.php" method="post">
                        <h5>******** TEXT BOX ********</h5>
                        <div>
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="mail" placeholder="email@com">
                        </div>
                        <div>
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="pass" placeholder="password">
                        </div>

                        <div>
                            <input class="form-control" type="hidden" name="oculto" value="Dato oculto">
                        </div>
                        <hr>
                        <br>
                        <H5>****** CHECK BOX *****</H5>
                        <div>
                            <input type="checkbox" name="genero" value="Mujer">Mujer </input>
                            <input type="checkbox" name="genero" value="Hombre">Hombre </input>
                        </div>
                        <br>
                        <p class="text-danger"><strong>Seleccione lenguajes de programación</strong></p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "C++" > 
                            <label class="form-check form-check-inline"> C++ </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "C#" > 
                            <label class="form-check form-check-inline"> C# </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "Java" > 
                            <label class="form-check form-check-inline"> Java </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "Html" > 
                            <label class="form-check form-check-inline"> HTML </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "JS" > 
                            <label class="form-check form-check-inline"> Javascript </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "Python" > 
                            <label class="form-check form-check-inline"> Python </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lp[]" value= "Php" > 
                            <label class="form-check form-check-inline"> PHP </label>
                        </div>
                        <br>
                        <hr>
                        <p class="text-danger"> <strong>Construcción Dinámica</strong></p>
                        <?php 
                            $vector = array("Op1", "Op2", "Op3", "Op4", "Op5", "Op6", "Op7", "Op8");
                            for($i=0; $i<count($vector); $i++){
                        ?>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="op[]" value= "<?php print($vector[$i]); ?>" >
                        <label class="form-check form-check-inline"> <?php print($vector[$i]); ?> </label>
                        </div>
                        <?php
                            }
                        ?>
                        
                        <br>
                        <input type="submit" class="btn btn-primary" value="procesar">
                        <br>
        

                    </form>
                </div>
                <div class="col-1">

                </div>
            </div>
        </div>

    </div>
</body>
</html>