<?php

include 'conexion.php';

$id=$_POST['id'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$placa=$_POST['placa'];
$fecha=$_POST['fecha'];
$documento=$_POST['documento'];
$nombre_tra=$_POST['nombre_tra'];
$created_at=$_POST['created_at'];
$update_at=$_POST['update_at'];

$consulta="insert into retorno_firma_proveedores values('".$id."','".$cedula."','".$nombre."','".$placa."','".$fecha."','".$documento."','".$nombre_tra."','".$created_at."','".$update_at."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

