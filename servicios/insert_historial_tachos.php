<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_tacho=$_POST['cod_tacho'];
$marca_producto=$_POST['marca_producto'];
$kg_descontar =$_POST['kg_descontar'];
$codigo_empaque =$_POST['codigo_empaque'];
$lote =$_POST['lote'];
$updated_at=$_POST['updated_at'];
$created_at=$_POST['created_at'];

$consulta="insert into historial_tachos values('".$id."','".$cod_tacho."','".$marca_producto."','".$kg_descontar."','".$codigo_empaque."','".$lote."','".$updated_at."','".$created_at."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

