<?php 

include("bd.php");

if (isset($_POST['cliente'])) {
		$name = $_POST['name'];
	    $lastname = $_POST['lastname'];
	    $correo = $_POST['email'];
	    $edad = $_POST['years'];
	    $cel = $_POST['cel'];
	    $fechareg = date("d/m/y");
		$query = "INSERT INTO cliente(nombre, apellido, correo, edad, telefono, fecha_reg) 
		VALUES ('$name','$lastname','$correo','$edad','$cel','$fechareg')";
		$result = mysqli_query($conex, $query);
		if(!$result){
			die("envio fallido");
			
		}

		Header("Location: cliente.php");
	}
?>