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
$ce_nombre_completo = $_POST['ce_nombre_completo'];
$ce_cedula = $_POST['ce_cedula'];
$ce_nacionalidad = $_POST['ce_nacionalidad'];
$ce_departamento = $_POST['ce_departamento'];
$cod_carnet = $_POST['cod_carnet'];
$st_cedula = $_POST['st_cedula'];
$st_foto = $_POST['st_foto'];
$st_curriculum = $_POST['st_curriculum'];
$st_partida_nacimiento = $_POST['st_partida_nacimiento'];
$st_titulo = $_POST['st_titulo'];
$st_titulo_cantidad = $_POST['st_titulo_cantidad'];
$st_certificado = $_POST['st_certificado'];
$st_certificado_cantidad = ($_POST['st_certificado_cantidad']);
$st_reposo = $_POST['ce_reposo'];
$st_reposo_cantidad = $_POST['st_reposo_cantidad'];
$st_amonestaciones = $_POST['st_amonestaciones'];
$st_amonestaciones_cantidad = $_POST['st_amonestaciones_cantidad'];
$st_plan_servicio = $_POST['st_plan_servicio'];
$ubicacion_actual = 'Registro y Control de Personal';
$descripcion_actual = 'Gerencia de Recursos Humanos';
$fecha_actual = date("d-m-Y");


// PROBANDO
/*
echo $ce_nombre_completo;
echo '--';
echo $ce_cedula;
echo '--';
echo $ce_nacionalidad;
echo '--';
echo $ce_departamento;
echo '--';
echo $cod_carnet;
echo '--';
echo $st_cedula;
echo '--';
echo $st_foto;
echo '--';
echo $st_curriculum;
echo '--';
echo $st_partida_nacimiento;
echo '--';
echo $st_titulo;
echo '--';
echo $st_titulo_cantidad;
echo '--';
echo $st_certificado;
echo '--';
echo $st_certificado_cantidad;
echo '--';
echo $st_reposo;
echo '--';
echo $st_reposo_cantidad;
echo '--';
echo $st_amonestaciones;
echo '--';
echo $st_amonestaciones_cantidad;
echo '--';
echo $st_plan_servicio;
echo '--';
*/

	//Validando si está Registrada la Cédula
	
	$sql = "SELECT * FROM control_de_expedientes WHERE ce_cedula='$ce_cedula'";
	$q=mysql_query($sql,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
			?><script>alert("Cédula ya utilizada en el Sistema");</script><?
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce.php"></head></html>';
		}else {

	// Almacenando Los Datos Básicos
	$sql="INSERT INTO control_de_expedientes  (ce_nombre_completo,ce_cedula,ce_nacionalidad,ce_departamento,cod_carnet,	st_cedula,st_foto,st_curriculum,st_partida_nacimiento,st_titulo,st_certificado,st_reposo,st_amonestaciones,	st_plan_servicio,ubicacion_actual,descripcion_actual,fecha_actual) VALUE ('$ce_nombre_completo','$ce_cedula','$ce_nacionalidad','$ce_departamento','$cod_carnet','$st_cedula','$st_foto','$st_curriculum','$st_partida_nacimiento','$st_titulo','$st_certificado','$st_reposo','$st_amonestaciones','$st_plan_servicio','$ubicacion_actual','$descripcion_actual','$fecha_actual')";
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

			?><script>alert("Datos almacenados exitosamente");</script><?
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce.php"></head></html>';
			
			
		}
		
	
?>
