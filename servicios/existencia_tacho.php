<?php

include 'conexion.php';

$codigo_empaque=$_GET['codigo_empaque'];
$lote=$_GET['lote'];
$sql ="select count(*) as existencia from eg_egreso_tachos_encabezados where lote='$lote' and codigo_empaque='$codigo_empaque'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
if (!$resul) {
    echo(mysqli_error($conexion));
}
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>