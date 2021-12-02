<?php 

include("bd.php");

if (isset($_POST['citas'])) {
		$name = $_POST['name'];
	    $lastname = $_POST['lastname'];
	    $edad = $_POST['edad'];
	    $cel = $_POST['cel'];
	    $fechacon = date("d/m/y");
		$fechacit = $_POST['fechaCit'];
		$motivo = $_POST['motivo'];
		$query = "INSERT INTO citas(nombre, apellido, edad, telefono, fecha_con, fecha_cita, motivo) 
		VALUES ('$name','$lastname','$edad','$cel','$fechacon','$fechacit','$motivo')";
		$result = mysqli_query($conex, $query);
		if(!$result){
			die("envio fallido");
			
		}

		Header("Location: citas.php");
	}
?>