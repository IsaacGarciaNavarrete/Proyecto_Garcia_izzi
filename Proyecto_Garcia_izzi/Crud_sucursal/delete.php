<?php

include("conexion.php");
$con=conectar();

$id_sucursal=$_GET['id'];

$sql="DELETE FROM sucursal  WHERE id_sucursal='$id_sucursal'  ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>
