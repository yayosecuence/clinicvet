<?php

include 'conexion.php';

$id=$_GET['id'];
$urbanizacion=$_GET['urbanizacion'];


$consulta="update users set urbanizacion='".$urbanizacion."'where id='".$id."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

