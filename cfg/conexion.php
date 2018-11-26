<?php

    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "c9";

   $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos);
       mysqli_set_charset($conexion, "utf8");  
    if (!$conexion) {
        die("No pudo conectarse:" . mysqli_error());
    }
    else{
       //echo 'Conectado  satisfactoriamente al servidor <br>';
    }
    mysqli_select_db ($conexion, $basededatos) or die(mysqli_error($conexion));
?>