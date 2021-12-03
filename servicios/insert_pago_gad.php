<?php

include 'conexion.php';

$id=$_GET['id'];
$cedula=$_GET['cedula'];

$consulta="insert into gadmunicipales values('".$id."','".$cedula."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
