<?php

include 'conexion.php';

$id=$_POST['id'];
$lote=$_POST['lote'];
$fecha=$_POST['fecha'];

$consulta="insert into eg_codigos_lotes values('".$id."','".$lote."','".$fecha."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>