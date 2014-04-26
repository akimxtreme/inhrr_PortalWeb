<?php
session_start();

include "conexion.php";
/*Validacion del formulario para solicitar cuenta */
// Obtencion de variables
$usuario= $_POST['usuario'];
$contrasenia= $_POST['contrasenia'];

//minusculas
$usuario = strtolower ($usuario);
$contrasenia = strtolower ($contrasenia);
if ($usuario =="" || $contrasenia==""  ){
	?><script>alert("Ingrese el usuario y/o clave");</script><?
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv_ingreso_administracion.php"></head></html>';			
	}else {
		//validando si esta registrado en sistema
$sql = "SELECT * FROM usuarios";
$q=mysql_query($sql,$conexion);

while ($fila = mysql_fetch_array($q)){
	$usuario_cv = $fila['usuario'];
	$contrasenia_cv = $fila['contrasenia'];
	$estatus_cv = $fila['estatus'];
	if($usuario == $usuario_cv & $contrasenia == $contrasenia_cv){
		$_SESSION['usuario']= $usuario;
		$_SESSION['contrasenia']= $contrasenia;
		$_SESSION['estatus']= $estatus_cv;
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv_administracion.php"></head></html>';
			}else {
				?><script>alert("Datos Incorrectos");</script><?
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv_ingreso_administracion.php"></head></html>';
				}
		
	
}
		
		}
	

?>