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


$sql="UPDATE empleado SET  nombre='$nombre',apellido='$apellido',fecha_nacimiento='$fecha_nacimiento',INE='$INE',CURP='$CURP',direccion='$direccion' WHERE id_empleado='$id_empleado' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>