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



$sql= "INSERT INTO usuario
VALUES ('$id_usuario','$nombre','$apellido','$correo_electronico','$contraseña','$telefono','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>