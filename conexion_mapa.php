<?php
$servidor 	= "localhost";
$usuario 	= "root";
$pass 		= "s3cur1tys3c";
$base_datos = "portal_web";
//Conexión al servidor de bases de datos
$conexion = mysql_connect($servidor,$usuario, $pass);
//Se selecciona la base de datos
mysql_select_db($base_datos,$conexion);
@mysql_query("SET NAMES 'utf8'");
if (!$conexion) {
    die('<html><head><meta http-equiv="REFRESH" content="0; url=mantenimiento.php"></head></html>');
}
//Se cierra la conexión cuando terminemos

/*
//CONECTOR

function ConectarBD2(){
  return mysql_connect("localhost","root","indiana2013");
}


//EJECUTAR EXEC

function EjecuteExec2($conector,$sql1){
    mysql_select_db("laboratorios_salud_publica",$conector);
	//@mysql_query("SET NAMES 'utf8'");
    return mysql_query($sql1,$conector);
	
}


//EJECUTAR FETCH

function ObtenerFila2($conector){
    return mysql_fetch_row($conector);
}

//
function NumFila2($q){
    return mysql_num_rows($q);
}
*/
?>