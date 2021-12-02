<?php 

include("bd.php");

if (isset($_POST['empleado'])) {
		$name = $_POST['name'];
	    $lastname = $_POST['lastname'];
		$edad = $_POST['years'];
	    $rfc = $_POST['rfc'];
	    $email = $_POST['email'];
	    $fechareg = date("d/m/y");
		$query = "INSERT INTO empleado(nombre, apellido, edad, RFC, email, fecha_reg) 
		VALUES ('$name','$lastname','$edad','$rfc','$email','$fechareg')";
		$result = mysqli_query($conex, $query);
		if(!$result){
			die("envio fallido");
			
		}

		Header("Location: empleado.php");
	}
?>