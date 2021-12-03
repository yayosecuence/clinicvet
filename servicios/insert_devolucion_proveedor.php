<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_tachos=$_POST['cod_tachos'];
$marca_producto=$_POST['marca_producto'];
$kg_descontar=$_POST['kg_descontar'];
$observacion=$_POST['observacion'];
$documento=$_POST['documento'];
$created_at=$_POST['created_at'];
$update_at=$_POST['update_at'];

$consulta="insert into retorno_proveedores values('".$id."','".$cod_tachos."','".$marca_producto."','".$kg_descontar."','".$observacion."','".$documento."','".$created_at."','".$update_at."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>