<?php

include 'conexion.php';

$id=$_GET['id'];
$urbanizacion=$_GET['urbanizacion'];
$nombre=$_GET['nombre'];
$asistencia=$_GET['asistencia'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];


$consulta="insert into listados values('".$id."','".$urbanizacion."','".$nombre."','".$asistencia."','".$fecha."','".$hora."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
