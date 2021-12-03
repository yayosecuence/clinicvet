<?php

include 'conexion.php';
$tipo_votacion=$_GET['tipo_votacion'];
$cedula_votante=$_GET['cedula_votante'];
$urbanizacion=$_GET['urbanizacion'];
$sql ="select count(*) as voto from votosguardars where tipo_votacion='$tipo_votacion' and cedula_votante='$cedula_votante' and urbanizacion='$urbanizacion'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>