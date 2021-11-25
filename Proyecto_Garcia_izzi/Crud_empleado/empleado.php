<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title> Alta Empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <body>
        <?php include("../header.php") ?>
        
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta de Empleados</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="id_empleado" placeholder="id_empleado">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                                    <input type="text" class="form-control mb-3" name="INE" placeholder="INE">
                                    <input type="text" class="form-control mb-3" name="CURP" placeholder="CURP">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>INE</th>
                                        <th>CURP</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id_empleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['fecha_nacimiento']?></th>
                                                <th><?php  echo $row['INE']?></th>    
                                                <th><?php  echo $row['CURP']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row ['id_empleado']  ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row ['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
	
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>