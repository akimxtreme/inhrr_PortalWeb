<?php

// Variables
$servidor='localhost';
$user='root';
$pass='s3cur1tys3c';

//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect($servidor,$user,$pass) or die ("NO SE PUEDE CONECTAR");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('portal_web2',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>