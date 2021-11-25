<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo_electronico=$_POST['correo_electronico'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];



$sql="UPDATE usuario SET  nombre='$nombre',apellido='$apellido',correo_electronico='$correo_electronico',contraseña='$contraseña',telefono='$telefono',direccion='$direccion' WHERE id_usuario='$id_usuario' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>