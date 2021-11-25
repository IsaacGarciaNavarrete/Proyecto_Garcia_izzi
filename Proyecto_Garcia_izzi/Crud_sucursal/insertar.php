<?php
include("conexion.php");
$con=conectar();

$id_sucursal=$_POST['id_sucursal'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$encargado=$_POST['encargado'];
$telefono=$_POST['telefono'];
$correo_electronico=$_POST['correo_electronico'];




$sql= "INSERT INTO sucursal(id_sucursal, nombre, direccion, encargado, telefono, correo_electronico) 
VALUES ('$id_sucursal','$nombre','$direccion','$encargado','$telefono','$correo_electronico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
    
}else {
}
?>