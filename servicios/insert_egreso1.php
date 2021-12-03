<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_tacho=$_POST['cod_tacho'];
$marca_producto=$_POST['marca_producto'];
$kg_descontar =$_POST['kg_descontar'];
$observacion =$_POST['observacion'];  
$codigo_empaque =$_POST['codigo_empaque'];
$lote =$_POST['lote'];
$updated_at=$_GET['updated_at'];
$created_at=$_GET['created_at'];


$consulta="insert into eg_egreso_tachos values('".$id."','".$cod_tacho."','".$marca_producto."','".$kg_descontar."','".$observacion."','".$codigo_empaque."','".$lote."','".$updated_at."','".$created_at."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>