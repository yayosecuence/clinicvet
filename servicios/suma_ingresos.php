
<?php

include 'conexion.php';
$nombre_urbanizacion=$_GET['nombre_urbanizacion'];
$anio=$_GET['anio'];
$mes=$_GET['mes'];


$sql ="select sum(monto) as montos from ingresos where nombre_urbanizacion='$nombre_urbanizacion' and mes='$mes' and anio='$anio' ";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>