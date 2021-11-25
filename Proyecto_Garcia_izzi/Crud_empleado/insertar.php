<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$INE=$_POST['INE'];
$CURP=$_POST['CURP'];
$direccion=$_POST['direccion'];



$sql= "INSERT INTO empleado(id_empleado, nombre, apellido, fecha_nacimiento, INE, CURP, direccion)
 VALUES ('$id_empleado','$nombre','$apellido','$fecha_nacimiento','$INE','$CURP','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>