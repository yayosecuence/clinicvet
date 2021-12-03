<?php

include 'conexion.php';

$id=$_GET['id'];
$urbanizacion=$_GET['urbanizacion'];
$tipo_notificacion=$_GET['tipo_notificacion'];
$noticia=$_GET['noticia'];



$consulta="insert into notificaciones values('".$id."','".$urbanizacion."','".$tipo_notificacion."','".$noticia."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
