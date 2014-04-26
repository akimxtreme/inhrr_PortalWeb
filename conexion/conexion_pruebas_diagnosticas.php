<?php
//<><><><> Servidor Local <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>
	// Variables
$servidor='localhost';
$user='root';
$pass='s3cur1tys3c';

	//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect($servidor,$user,$pass) or die ("El Servidor de la Base de Datos se encuentra en mantenimiento");

	//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('pruebas_diagnosticas',$conexion);
@mysql_query("SET NAMES 'utf8'");
//<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

//<><><><> Servidor Externo <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>
/*
	//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect('172.16.0.10','root','s@lmon3ll@') or die ("El Servidor de la Base de Datos se encuentra en mantenimiento");

	//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('laboratorios_salud_publica',$conexion);
//<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>
*/
?>