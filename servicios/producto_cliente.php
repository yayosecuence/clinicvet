<?php

include 'conexion.php';

$producto=$_GET['producto'];

$sql ="select * from clientes where producto='$producto'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>

clientes