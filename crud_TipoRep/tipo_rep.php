<?php include("bd.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">   
    <title>-VOLTAGE-Reparacion</title>
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                <form action="insertar.php" method="POST">
                        <h2>REPARACION</h2>
                        <div class="form-group">
                        <div class="formaVenta">
                            <input type="radio" name="tipo" id="mayoreo" value="Automotriz">
                            <label for="mayoreo">Automotriz</label>
                            

                            <input type="radio" name="tipo" id="menudeo" value="Electrica">
                            <label for="menudeo">Electrica</label>
                        </div>
                        <br>
                        <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
                        <br>
		                <input type="text" name="object" class="form-control" placeholder="Objeto" autofocus>
                        <br>
		                <input type="text" name="domic" class="form-control" placeholder="Domicilio" autofocus>
                        <br>
		                <input type="text" name="cel" class="form-control" placeholder="telefono" autofocus>
                        </div><br>
                        <input type="submit" class="btn btn-success btn-block" name="reparacion">
                        <a href="/proyecto_zuñiga_TallerElectrico/index.php" 
                        class="btn btn-danger btn-block">Inicio</a>
                    </form>
    
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Objeto</th>
                            <th>Domicilio</th>
                            <th>Telefono</th>
                            <th>fecha_consulta</th>
                            <th>configurar</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM tipo_rep" ;
                        $result = mysqli_query($conex, $query,);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['tipo']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['objeto']; ?></td>
                            <td><?php echo $row['domicilio']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
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