<?php
session_start();
?>
<!-- Parametros de la hojas cv_acceso.php -->
<?php
include "conexion.php";
// Acesso al Espacio de Administracion del Sistema Automatizado de Sintesis Curruculares
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
//minusculas
$usuario = strtolower ($usuario);
$clave = strtolower ($clave);
//validando si esta registrado en sistema
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$clave' ";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
	if($cont>=1){
		while ($fila = mysql_fetch_array($q)){
			$usuario_bd = $fila['usuario'];
			$contrasenia_bd = $fila['contrasenia'];
			$cod = $fila['cod'];
			$_SESSION['usuario']= $usuario;
			$_SESSION['contrasenia']= $clave;
			$_SESSION['cod']= $cod;
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv_administracion.php"></head></html>';
			?><script>alert("Espacio - Administraci\u00f3n");</script><?
		}
	}else{
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv_acceso.php"></head></html>';
		?><script>alert("Datos No V\u00e1lidos");</script><?
	}
?>