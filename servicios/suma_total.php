<?php

include 'conexion.php';
$nombre_urbanizacion=$_GET['nombre_urbanizacion'];
$anio=$_GET['anio'];
$mes=$_GET['mes'];


$sql ="select sum(i.monto) as montosi, sum(e.monto) as montose, sum(i.monto - e.monto) as montosss from ingresos i,egresos e where i.nombre_urbanizacion='$nombre_urbanizacion' and i.mes='$mes' and i.anio='$anio' and e.nombre_urbanizacion='$nombre_urbanizacion' and e.mes='$mes' and e.anio='$anio'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>
