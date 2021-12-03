<?php

include 'conexion.php';

$cod_egreso=$_POST['cod_egreso'];
$estado=$_POST['estado'];
$cod_lote=$_POST['cod_lote'];


$consulta="update eg_cod_egresos set cod_egreso='".$cod_egreso."',estado='".$estado."',cod_lote='".$cod_lote."'where cod_egreso='".$cod_egreso."'and cod_lote='".$cod_lote."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>