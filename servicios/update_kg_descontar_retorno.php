<?php

include 'conexion.php';

$kg_descontar=$_POST['kg_descontar'];
$cod_tacho=$_POST['cod_tacho'];
$codigo_empaque=$_POST['codigo_empaque'];
$lote=$_POST['lote'];

$consulta="update eg_egreso_tachos set kg_descontar='".$kg_descontar."',cod_tacho='".$cod_tacho."',codigo_empaque='".$codigo_empaque."',lote='".$lote."'where cod_tacho='".$cod_tacho."'and codigo_empaque='".$codigo_empaque."'and lote='".$lote."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>