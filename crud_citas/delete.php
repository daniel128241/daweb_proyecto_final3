<?php

include("bd.php");

$id = $_GET['id'];

$sql = "DELETE FROM citas  WHERE id = '$id'";
$query = mysqli_query($conex, $sql);

    if ($query){
        Header("Location: citas.php");
    }
?>
