<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INHRR - Control de Expedientes</title>
<link href="css/estilos_cv.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/scripts_cv.js"></script>
<script type="text/javascript" src="tcal.js"></script> 
</head>
<?php

include "conexion.php";
// Creación de Variables
//Datos Básicos
$ce_cedula = $_POST['ce_cedula'];
$ubicacion_actual = $_POST['ubicacion_actual'];
$descripcion_actual = $_POST['descripcion_actual'];
$fecha_actual = $_POST['fecha_actual'];
$ubicacion_anterior = $_POST['ubicacion_anterior'];
$descripcion_anterior = $_POST['descripcion_anterior'];
$fecha_anterior = $_POST['fecha_anterior'];

// PROBANDO
/*
echo 'ce_cedula' . ':::'. $ce_cedula;
echo '<br>';
echo 'ubicacion_actual' . ':::'. $ubicacion_actual;
echo '<br>';
echo 'descripcion_actual' . ':::'. $descripcion_actual;
echo '<br>';
echo 'fecha_actual' . ':::'. $fecha_actual;
echo '<br>';
echo 'ubicacion_anterior' . ':::'. $ubicacion_anterior;
echo '<br>';
echo 'descripcion_anterior' . ':::'. $descripcion_anterior;
echo '<br>';
echo 'fecha_anterior' . ':::'. $fecha_anterior;
echo '<br>';
*/

// PROBANDO
	//Validando si está Registrada la Cédula
	
	// Almacenando Los DatOs del Control de Expedientes
	$sql="UPDATE control_de_expedientes  SET ubicacion_actual='$ubicacion_actual',descripcion_actual='$descripcion_actual',fecha_actual='$fecha_actual',ubicacion_anterior='$ubicacion_anterior',descripcion_anterior='$descripcion_anterior',fecha_anterior='$fecha_anterior' WHERE ce_cedula = '$ce_cedula' ";
	$ingreso=mysql_query($sql,$conexion);
	
	?><script>alert("Ubicacion modificada exitosamente");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce_ubicacion.php"></head></html>';
		
			
			
		
	
?>
