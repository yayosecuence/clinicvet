<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_egreso=$_POST['cod_egreso'];
$estado=$_POST['estado'];
$cod_lote=$_POST['cod_lote'];
$persona=$_POST['persona'];
$updated_at=$_POST['updated_at'];
$created_at=$_POST['created_at'];

$consulta="insert into eg_cod_egresos values('".$id."','".$cod_egreso."','".$estado."','".$cod_lote."','".$persona."','".$updated_at."','".$created_at."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>