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
$st_cedula = $_POST['st_cedula'];
$st_foto = $_POST['st_foto'];
$st_curriculum = $_POST['st_curriculum'];
$st_partida_nacimiento = $_POST['st_partida_nacimiento'];
$st_titulo = $_POST['st_titulo'];
$st_titulo_cantidad = $_POST['st_titulo_cantidad'];
$st_certificado = $_POST['st_certificado'];
$st_certificado_cantidad = $_POST['st_certificado_cantidad'];
$st_reposo = $_POST['st_reposo'];
$st_reposo_cantidad = $_POST['st_reposo_cantidad'];
$st_amonestaciones = $_POST['st_amonestaciones'];
$st_amonestaciones_cantidad = $_POST['st_amonestaciones_cantidad'];
$st_plan_servicio = $_POST['st_plan_servicio'];

// PROBANDO
/*
echo 'ce_cedula' . ':::'. $ce_cedula;
echo '<br>';
echo 'st_cedula' . ':::'. $st_cedula;
echo '<br>';
echo 'st_foto' . ':::'. $st_foto;
echo '<br>';
echo 'st_curriculum' . ':::'. $st_curriculum;
echo '<br>';
echo 'st_partida_nacimiento' . ':::'. $st_partida_nacimiento;
echo '<br>';
echo 'st_titulo' . ':::'. $st_titulo;
echo '<br>';
echo 'st_titulo_cantidad' . ':::'. $st_titulo_cantidad;
echo '<br>';
echo 'st_certificado' . ':::'. $st_certificado;
echo '<br>';
echo 'st_certificado_cantidad' . ':::'. $st_certificado_cantidad;
echo '<br>';
echo 'st_reposo' . ':::'. $st_reposo;
echo '<br>';
echo 'st_reposo_cantidad' . ':::'. $st_reposo_cantidad;
echo '<br>';
echo 'st_amonestaciones' . ':::'. $st_amonestaciones;
echo '<br>';
echo 'st_amonestaciones_cantidad' . ':::'. $st_amonestaciones_cantidad;
echo '<br>';
echo 'st_plan_servicio' . ':::'. $st_plan_servicio;
echo '<br>';

*/

	//Validando si está Registrada la Cédula
	
	// Almacenando Los DatOs del Control de Expedientes
	$sql="UPDATE control_de_expedientes  SET st_cedula='$st_cedula', st_foto='$st_foto',st_curriculum='$st_curriculum',st_partida_nacimiento='$st_partida_nacimiento',st_titulo='$st_titulo',st_certificado='$st_certificado',st_reposo='$st_reposo',st_amonestaciones='$st_amonestaciones',st_plan_servicio='$st_plan_servicio' WHERE ce_cedula = '$ce_cedula' ";
	$ingreso=mysql_query($sql,$conexion);
	
	if($st_titulo =='si'){
		$sql="UPDATE control_de_expedientes SET st_titulo_cantidad='$st_titulo_cantidad' WHERE ce_cedula = '$ce_cedula' ";
		$ingreso=mysql_query($sql,$conexion);
		
		}
	if($st_certificado =='si'){
		$sql="UPDATE control_de_expedientes SET st_certificado_cantidad='$st_certificado_cantidad' WHERE ce_cedula = '$ce_cedula' ";
		$ingreso=mysql_query($sql,$conexion);
		}
	if($st_reposo =='si'){
		$sql="UPDATE control_de_expedientes SET st_reposo_cantidad='$st_reposo_cantidad' WHERE ce_cedula = '$ce_cedula' ";
		$ingreso=mysql_query($sql,$conexion);
		}
	if($st_amonestaciones =='si'){
		$sql="UPDATE control_de_expedientes SET st_amonestaciones_cantidad='$st_amonestaciones_cantidad' WHERE ce_cedula = '$ce_cedula' ";
		$ingreso=mysql_query($sql,$conexion);
		}

		?><script>alert("Expediente Actualizado exitosamente");</script><?
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce_modificar.php"></head></html>';
		
			
			
		
	
?>
