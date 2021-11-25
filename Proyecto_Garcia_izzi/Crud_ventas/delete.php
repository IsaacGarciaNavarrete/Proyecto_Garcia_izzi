<?php

include("conexion.php");
$con=conectar();

$id_ventas=$_GET['id'];

$sql="DELETE FROM ventas  WHERE id_ventas='$id_ventas'  ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>
