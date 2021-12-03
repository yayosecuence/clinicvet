<?php

include 'conexion.php';
$name=$_GET['name'];
$urbanizacion=$_GET['urbanizacion'];
$sql ="select cedula from users where name='$name' and urbanizacion='$urbanizacion'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>