<?php

/////////////////////////////////////////////////////
/*
Formulario de Atención al Ciudadano
 - Página: (atencion_al_ciudadano.php)
 

*/
function post($name){
	$elemento = $_POST[$name];
	return $elemento;
	}

$campos = array(
			post('nombre_ac'),
			post('apellido_ac'),		
			post('correo_ac'),
			post('telefono_ac'),
			post('tema_ac'),
			post('titulo_ac'),
			post('mensaje_ac')
			);
	/*
for($i=0;$i<=count($campos);$i++){
	echo $campos[$i];
	echo '<br><br>';
	}
	*/

$tabla = 'atencion_ciudadano';
$campos_tabla = array(
				'nombre',
				'apellido',
				'correo',
				'telefono',
				'tema',
				'titulo',
				'mensaje'	
						);	


function insert($tabla,$campos_tabla,$datos){
	include_once('conexion/conexion_portal.php');
	$campo = "";
	$dato = "";
	$count = count($campos_tabla);
	for($i=0;$i<=$count;$i++){
		switch($i){
			case 0:
			$campo = $campo . $campos_tabla[$i];
			break;
			case $count:
			$campo = $campo . $campos_tabla[$i];
			break;
			default:
			$campo = $campo . ',' .$campos_tabla[$i] ;
			}
				
	}
	
	for($i=0;$i<=$count;$i++){
		switch($i){
			case 0:
			$dato = $dato . "'". $datos[$i] . "'";
			break;
			case $count:
			$dato = $dato . $datos[$i];
			break;
			default:
			$dato = $dato .  ", '" .$datos[$i] . "'";
			}
				
	}
	
	$campo = "(" . $campo . ")";
	$dato = "(" . $dato . ")";
	$sql = "INSERT INTO " . $tabla . " " . $campo . " VALUE " . " " . $dato;
	$ingreso=mysql_query($sql,$conexion);
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=atencion_al_ciudadano.php"></head></html>';
}
insert($tabla,$campos_tabla,$campos);

?>