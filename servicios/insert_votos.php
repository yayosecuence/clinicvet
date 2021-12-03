<?php

include 'conexion.php';

$id=$_GET['id'];
$tipo_votacion=$_GET['tipo_votacion'];
$cedula_votante=$_GET['cedula_votante'];
$urbanizacion=$_GET['urbanizacion'];

$consulta="insert into votosguardars values('".$id."','".$tipo_votacion."','".$cedula_votante."','".$urbanizacion."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
