<?php 

include("bd.php");

if (isset($_POST['reparacion'])) {
		$type = $_POST['tipo'];
	    $name = $_POST['name'];
	    $object = $_POST['object'];
	    $dom = $_POST['domic'];
	    $cel = $_POST['cel'];
	    $fechareg = date("d/m/y");
		$query = "INSERT INTO tipo_rep(tipo, nombre, objeto, domicilio, telefono, fecha) 
		VALUES ('$type','$name','$object','$dom','$cel','$fechareg')";
		$result = mysqli_query($conex, $query);
		if(!$result){
			die("envio fallido");
			
		}

		Header("Location: tipo_rep.php");
	}
?>