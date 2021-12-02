<?php include("bd.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">   
    <title>-VOLTAGE-Empleados</title>
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                <form action="insertar.php" method="POST">
                        <h1>EMPLEADO</h1>
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="nombre" autofocus>
                        <br>
                        <input type="text" name="lastname" class="form-control" placeholder="apellido" autofocus>
                        <br>
		                <input type="text" name="years" class="form-control" placeholder="edad" autofocus>
                        <br>
		                <input type="text" name="rfc" class="form-control" placeholder="RFC" autofocus>
                        <br>
		                <input type="email" name="email" class="form-control" placeholder="correo" autofocus>
                        </div><br>
                        <input type="submit" class="btn btn-success btn-block" name="empleado">
                        <a href="/proyecto_zuñiga_TallerElectrico/index.php" 
                        class="btn btn-danger btn-block">Inicio</a>
                    </form>
    
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>RFC</th>
                            <th>Correo</th>
                            <th>Fecha_registro</th>
                            <th>configurar</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM empleado" ;
                        $result = mysqli_query($conex, $query,);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['RFC']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['fecha_reg']; ?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">
                            Editar</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            Eliminar</a>                            
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>