<?php
session_start();
?>
<?php
include "conexion_ce.php";

/*Validacion del formulario para solicitar cuenta */
// Obtencion de variables
$usuario1= $_POST['usuario'];
$contrasenia1= $_POST['contrasenia'];
//minusculas


// encriptando la contraseña en md5
$contrasenia1 = md5 ($contrasenia1); 

//validando accesos
// Administradores
$sql = "SELECT * FROM usuario WHERE usuario='$usuario1' AND contrasenia='$contrasenia1'";
$q=mysql_query($sql,$conexion);
$cont=mysql_num_rows($q);
if($cont>=1){
	
	while ($fila = mysql_fetch_array($q)){
	$usuario = $fila['usuario'];
	$privilegio = $fila['privilegio'];
		$_SESSION['usuario']= $usuario;
		$_SESSION['privilegio']= $privilegio;
		?><script>alert("M\u00f3dulos del Sistema de Alerta de Medicamentos");</script><?
		echo '<html><head><meta http-equiv="REFRESH" content="0; url=modulos_ce.php"></head></html>';
		
}
}else{
echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce_acceso.php"></head></html>';
		?><script>alert("Datos No V\u00e1lidos");</script><?
}
?>