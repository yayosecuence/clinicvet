<?php

include 'conexion.php';
$email=$_GET['email'];
$cedula=$_GET['cedula'];
$sql ="select * from users where email='$email' and cedula='$cedula'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>