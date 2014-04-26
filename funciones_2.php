<?php
include ('conexion_ce.php');
include ('funciones.php');

$buscar = "'buscar'";
$c=$_GET['c'];
// opcion
if($c!='Seleccione...'){
	selects($c,"opcion","formulario","obligatorio('buscar');","alertas","");
	}else {
		selects("Opción","opcion","formulario","obligatorio('buscar');","","");
		}
	
	
    



?>
