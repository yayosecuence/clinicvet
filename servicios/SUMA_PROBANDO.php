
<?php

include 'conexion.php';
$codigo_empaque=$_GET['codigo_empaque'];
$lote=$_GET['lote'];
$sql ="select sum(kg_descontar) from eg_egreso_tachos where codigo_empaque='$codigo_empaque' and lote='$lote'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>