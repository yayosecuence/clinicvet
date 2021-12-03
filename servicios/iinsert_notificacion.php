<?php

include 'conexion.php';

$id=$_GET['id'];
$urbanizacion=$_GET['urbanizacion'];
$tipo_notificacion=$_GET['tipo_notificacion'];

$consulta="insert into notificaciones values('".$id."','".$urbanizacion."','".$tipo_notificacion."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
