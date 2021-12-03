<?php

include 'conexion.php';

$id=$_GET['id'];

$sql ="select id,Foto1,Foto2,Foto3,Foto4,Foto5 from bienes__raices where id='$id' ";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>

