<?php
session_start();
require("conexion/conexion.php");

if (isset($_POST['btnre'])){
    
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $correo= $_POST['correo'];
    $clave= $_POST['clave'];
    $nick= $_POST['nick'];

    if ($nombres=="" or $apellidos==""){
        header('Location: registroFG.php');
    }else{
        
    mysqli_query($con,"INSERT INTO usuario (nombres,apellidos,correo,clave,nick) VALUES ('$nombres','$apellidos','$correo','$clave','$nick')");
   
    echo "Registro completado".$apellidos.$nombres.$nick;
    }
    mysqli_close($con);
    header('Location: login.php');
}


if (isset($_POST['cerrarSession'])){
    session_destroy();
    header('Location: login.php');
}

?>