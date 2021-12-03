<?php

include 'conexion.php';
$cod_lote=$_GET['cod_lote'];
$sql ="select * from eg_cod_egresos where cod_lote='$cod_lote'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>