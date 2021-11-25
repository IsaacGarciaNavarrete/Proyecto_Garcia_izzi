<?php
include("conexion.php");
$con=conectar();

$id_ventas=$_POST['id_ventas'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$paquete=$_POST['paquete'];
$metodo_pago=$_POST['metodo_pago'];




$sql= "INSERT INTO ventas(id_ventas, nombre, usuario, paquete, metodo_pago) 
VALUES ('$id_ventas','$nombre','$usuario','$paquete','$metodo_pago')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>