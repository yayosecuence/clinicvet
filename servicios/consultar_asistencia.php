<?php

include 'conexion.php';
$fecha=$_GET['fecha'];
$nombre=$_GET['nombre'];
$urbanizacion=$_GET['urbanizacion'];
$sql ="select count(*) as lis from listados where fecha='$fecha' and nombre='$nombre' and urbanizacion='$urbanizacion'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>