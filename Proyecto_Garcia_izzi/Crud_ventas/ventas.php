<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Ventas</title>
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
                            <h1>Ventas</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="id_ventas" placeholder="id_ventas">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="paquete" placeholder="Paquete">
                                    <input type="text" class="form-control mb-3" name="metodo_pago" placeholder="Metodo de pago">

                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>id</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Paquete</th>
                                        <th>Metodo de pago</th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['id_ventas']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['paquete']?></th>    
                                                <th><?php  echo $row['metodo_pago']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row ['id_ventas']  ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row ['id_ventas'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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