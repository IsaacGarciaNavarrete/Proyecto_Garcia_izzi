<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Ingresar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <?php include("../header.php") ?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingresar</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="id_usuario" placeholder="id_usuario">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="Correo Electronico">
                                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
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
                                        <th>Correo Electronico</th>
                                        <th>Contraseña</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['correo_electronico']?></th>
                                                <th><?php  echo $row['contraseña']?></th>    
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row ['id_usuario']  ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row ['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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