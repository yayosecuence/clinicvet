<?php

include 'conexion.php';

$id=$_POST['id'];
$juliano_general=$_POST['juliano_general'];
$juliano_interno=$_POST['juliano_interno'];
$fecha_tacho=$_POST['fecha_tacho'];
$horario_inicio=$_POST['horario_inicio'];
$horario_fin=$_POST['horario_fin'];
$supervisor=$_POST['supervisor'];
$grupo_trabajo=$_POST['grupo_trabajo'];
$freidora=$_POST['freidora'];
$codigo_producto=$_POST['codigo_producto'];
$codigo_equipo=$_POST['codigo_equipo'];
$operador_tacho=$_POST['operador_tacho'];
$tipo_tacho=$_POST['tipo_tacho'];
$codigo_encabezado=$_POST['codigo_encabezado'];
$estado=$_POST['estado'];

$consulta="insert into encabezado_tachos values('".$id."','".$juliano_general."','".$juliano_interno."','".$fecha_tacho."','".$horario_inicio."','".$horario_fin."','".$supervisor."','".$grupo_trabajo."','".$freidora."','".$codigo_producto."','".$codigo_equipo."','".$operador_tacho."','".$tipo_tacho."','".$codigo_encabezado."','".$estado."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>