<?php

include("conexion.php");
$con=conectar();

$id_ventas=$_POST['id_ventas'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$paquete=$_POST['paquete'];
$metodo_pago=$_POST['metodo_pago'];



$sql="UPDATE ventas SET  nombre='$nombre',usuario='$usuario',paquete='$paquete',metodo_pago='$metodo_pago' WHERE id_ventas='$id_ventas' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>