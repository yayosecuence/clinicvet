<?php

include 'conexion.php';

$id=$_GET['id'];
$usuario=$_GET['usuario'];
$token=$_GET['token'];
$estado=$_GET['estado'];
$urbanizacion=$_GET['urbanizacion'];

$consulta="insert into tokenes values('".$id."','".$usuario."','".$token."','".$estado."','".$urbanizacion."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);
?>
