<?php
echo "<h1>CONEXION</h1>";
$servidor = "localhost";
$usuario = "root";
$pass = "indiana2013";
$base_datos = "inhrrweb";
//Conexión al servidor de bases de datos
$conexion = mysql_connect($servidor,$usuario, $pass);
//Se selecciona la base de datos
mysql_select_db($base_datos,$conexion);
if (!$conexion) {
    die('Error al conectarse a mysql: ' . mysql_error());
}else {echo "<h1>Conexion Exitosa</h1>";}

//Se cierra la conexión cuando terminemos


?>