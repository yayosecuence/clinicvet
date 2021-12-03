<?php

include 'conexion.php';

$id=$_GET['id'];
$confirmacion=$_GET['confirmacion'];


$consulta="update users set confirmacion='".$confirmacion."'where id='".$id."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

