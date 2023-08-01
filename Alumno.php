<?php

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
session_start();

$conexion=mysqli_connect("localhost","root","","Examen");
$consulta=("SELECT * FROM docente WHERE Nombre='$usuario' and Password='$contraseña'");
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($resultado);

if ($fila){

        echo '<script> alert("Hola, Bienvenido")</script>';
        echo'<script type="text/javascript"> window.location.href="menu.html"</script>';
    }else{
        echo'<script> alert("datos incorrectos")</script>';
        echo'<script type="text/javascript"> window.location.href="login.html"</script>';
        
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>