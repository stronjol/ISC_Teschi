<?php

$server="localhost:3306";
$usuario="root";
$contraseña="1234";
$bd="datos_isc";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
    or die("Error en la contraseña");

    $nombre = $_POST['txtNombre'];
    $aPaterno = $_POST['txtApaterno'];
    $aMaterno = $_POST['txtAmaterno'];
    $edad = $_POST['txtEdad'];
    $direccion = $_POST['txtDireccion'];
    $tel = $_POST['txtTel'];
    $correo = $_POST['txtEmail'];
    $plantel = $_POST['txtPlantel'];
    
    $insertar= "INSERT INTO externo (nombre, a_paterno, a_materno, edad, direccion, telefono, email, plantel)
     VALUES('$nombre', '$aPaterno', '$aMaterno', '$edad', '$direccion','$tel', '$correo', '$plantel' )";
    
    $resultado = mysqli_query($conexion, $insertar)
    or die("ERROR AL INSERTAR LOS REGISTROS");
    
    mysqli_close($conexion);
    echo '<script language="javascript">alert("Registro creado correctamente");window.location.href="Registro.html"</script>';

?>