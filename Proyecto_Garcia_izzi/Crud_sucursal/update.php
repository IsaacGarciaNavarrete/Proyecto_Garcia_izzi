<?php

include("conexion.php");
$con=conectar();

$id_sucursal=$_POST['id_sucursal'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$encargado=$_POST['encargado'];
$telefono=$_POST['telefono'];
$correo_electronico=$_POST['correo_electronico'];



$sql="UPDATE sucursal SET  nombre='$nombre',direccion='$direccion',encargado='$encargado',telefono='$telefono',correo_electronico='$correo_electronico' WHERE id_sucursal='$id_sucursal' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>