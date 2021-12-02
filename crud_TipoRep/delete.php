<?php

include("bd.php");

$id = $_GET['id'];

$sql = "DELETE FROM tipo_rep WHERE id = '$id'";
$query = mysqli_query($conex, $sql);

    if ($query){
        Header("Location: tipo_rep.php");
    }
?>
