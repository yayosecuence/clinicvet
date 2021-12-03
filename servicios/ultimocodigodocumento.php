<?php

include 'conexion.php';

$sql ="select num_documento from documento_dovoluciones order by num_documento DESC LIMIT 1 ";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>