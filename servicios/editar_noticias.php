<?php

include 'conexion.php';

$urbanizacion=$_GET['urbanizacion'];
$tipo_notificacion=$_GET['tipo_notificacion'];
$noticia=$_GET['noticia'];


$consulta="update notificaciones set urbanizacion='".$urbanizacion."',tipo_notificacion='".$tipo_notificacion."',noticia='".$noticia."'where urbanizacion='".$urbanizacion."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>
