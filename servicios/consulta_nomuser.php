<?php

include 'conexion.php';


$cedula=$_GET['cedula'];
$urbanizacion=$_GET['urbanizacion'];

$sql ="select name from users where cedula='$cedula' and urbanizacion='$urbanizacion'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>
