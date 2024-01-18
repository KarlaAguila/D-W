<?php
// Inicia la sesión
session_start();

// Destruye todos los datos de la sesión
session_destroy();

// Redirige a la página de inicio o a donde desees después de cerrar sesión
header("Location: inicio.html");
exit();
?>