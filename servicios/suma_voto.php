<?php

include 'conexion.php';

$nombre_candidato=$_GET['nombre_candidato'];
$cedula_candidato=$_GET['cedula_candidato'];
$tipo_votacion=$_GET['tipo_votacion'];
$urbanizacion=$_GET['urbanizacion'];
$numero_votos=$_GET['numero_votos'];
$porcentaje=$_GET['porcentaje'];


$consulta="update votaciones set numero_votos='".$numero_votos."',porcentaje='".$porcentaje."'where nombre_candidato='".$nombre_candidato."'and cedula_candidato='".$cedula_candidato."'and tipo_votacion='".$tipo_votacion."'and urbanizacion='".$urbanizacion."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

