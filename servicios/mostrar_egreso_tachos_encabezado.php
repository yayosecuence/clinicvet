<?php

include 'conexion.php';
$codigo_empaque=$_GET['codigo_empaque'];
$lote=$_GET['lote'];
$sql ="select * from eg_egreso_tachos_encabezados where codigo_empaque='$codigo_empaque' and lote='$lote'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>