<?php

include 'conexion.php';

$cedula=$_GET['cedula'];
$pago=$_GET['pago'];
$urbanizacion=$_GET['urbanizacion'];


$consulta="update users set pago='".$pago."'where cedula='".$cedula."' and urbanizacion='".$urbanizacion."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

