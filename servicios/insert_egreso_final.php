<?php

include 'conexion.php';

$id=$_POST['id'];
$peso_neto_total=$_POST['peso_neto_total'];	
$peso_saborizante=$_POST['peso_saborizante'];		
$peso_merma	=$_POST['peso_merma'];	
$empacado=$_POST['empacado'];	
$lote_fundas=$_POST['lote_fundas'];		
$fundas	=$_POST['fundas'];	
$lote_carton=$_POST['lote_carton'];		
$carton	=$_POST['carton'];	
$peso_bruto	=$_POST['peso_bruto'];	
$peso_neto=$_POST['peso_neto'];	
$merma	=$_POST['merma'];
$diferencia	=$_POST['diferencia'];	
$total_preempaque=$_POST['total_preempaque'];	
$lote=$_POST['lote'];	
$cod_empaque=$_POST['cod_empaque'];		
$persona=$_POST['persona'];


$consulta="insert into eg_egreso_finals values('".$id."','".$peso_neto_total."','".$peso_saborizante."','".$peso_merma."','".$empacado."','".$lote_fundas."','".$fundas."','".$lote_carton."','".$carton."','".$peso_bruto."','".$peso_neto."','".$merma."','".$diferencia."','".$total_preempaque."','".$lote."','".$cod_empaque."','".$persona."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>