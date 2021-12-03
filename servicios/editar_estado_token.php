<?php

include 'conexion.php';

$usuario=$_GET['usuario'];
$urbanizacion=$_GET['urbanizacion'];
$token=$_GET['token'];
$estado=$_GET['estado'];


$consulta="update tokenes set token='".$token."',estado='".$estado."'where usuario='".$usuario."'and urbanizacion='".$urbanizacion."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

