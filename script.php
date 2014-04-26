<?php
// insertando una circular

// Variables
$servidor='localhost';
$user='root';
$pass='s3cur1tys3c';
//$pass='';
//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect($servidor,$user,$pass) or die ("El Servidor de la Base de Datos se encuentra en mantenimiento");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");

$sql = "SELECT * FROM circulares_rc WHERE numero='PE-178-2012'";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
if($cont>=1){
	}else{
	$sql = "INSERT INTO circulares_rc (tipo_circular, numero, fecha, asunto, adjunto) VALUES ('PE','PE-178-2012','2012-02-10','NORMATIVA PARA EL PAGO DE SERVICIOS', 'PE-178-2012.pdf')";
	$accion=mysql_query($sql,$conexion);	
}

$sql = "SELECT * FROM circulares_rc WHERE numero='PE-333-2013'";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
if($cont>=1){
	}else{
	$sql = "INSERT INTO circulares_rc (tipo_circular, numero, fecha, asunto, adjunto) VALUES ('PE','PE-333-2013','2013-04-22','REEMBOLSO DE PAGOS POR SERVICIOS', 'PE-333-2013.pdf')";
	$accion=mysql_query($sql,$conexion);	
}
mysql_close();


?>