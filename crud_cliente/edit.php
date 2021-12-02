<?php
include('bd.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">   
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM cliente WHERE id = '$id'";
    $result = mysqli_query($conex, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row['nombre'];
        $lastname = $row['apellido'];
        $email = $row['correo'];
        $edad = $row['edad'];
        $cel = $row['telefono'];
    }
    if (isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $lastn = $_POST['lastname'];
        $email = $_POST['email'];
        $years = $_POST['edad'];
        $cel = $_POST['cel'];
        $query = "UPDATE cliente set nombre = '$name', apellido = '$lastname', correo = '$email',
        edad = '$years', telefono = '$cel' WHERE id = '$id'";
        mysqli_query($conex, $query);
        header('Location: index.php');
    }
}
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo $name; ?>" 
                        class="form-control" placeholder="actualizar nombre">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="lastname" value="<?php echo $lastname; ?>" 
                        class="form-control" placeholder="actualizar apellido">
                    </div><br>
                    <div class="form-group">
                        <input type="email" name="email" value="<?php echo $email; ?>" 
                        class="form-control" placeholder="actualizar correo">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="edad" value="<?php echo $edad; ?>" 
                        class="form-control" placeholder="actualizar edad">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="cel" value="<?php echo $cel; ?>" 
                        class="form-control" placeholder="actualizar telefono">
                    </div><br>
                    <button class="btn btn-success" name="actualizar">ACTUALIZAR</button>
                </form>
            </div>
        </div>
    </div>
</div>