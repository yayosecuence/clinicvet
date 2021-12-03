<?php

include 'conexion.php';
$nombre_urbanizacion=$_GET['nombre_urbanizacion'];
$sql ="select token from urbanizaciones where nombre_urbanizacion='$nombre_urbanizacion'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>
