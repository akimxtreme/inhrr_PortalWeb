<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/menu_superior.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Unidad de Atención al Paciente</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<?php
metaGoogle();
?>        
</head>
<body>	
<!-- CONTENEDOR -->
<div id="contenedor">
	<?php
	tamanioLetra();
	cintilloGobierno();
	encabezado_MenuBanner();
	?>
<!-- InstanceBeginEditable name="slideshow" --><!-- InstanceEndEditable -->
	<?php
	menuSuperior();
	menuPrincipal();
	?>


<!-- Contenedor -->
<div class="contenedor_0">
<!-- InstanceBeginEditable name="informacion" -->
<?php
/*include ('conexion/conexion_pruebas_diagnosticas.php');*/
include ('funciones/funciones_pruebas_diagnosticas.php');

echo '<h1 class="contenedor_0">Pruebas Diagnósticas</h1>';


formulario_inicio('Carga de Pruebas Diagnósticas', 'formulario','pruebas_diagnoticas','bd_acciones.php','post','','','','','');
select ('Agente','formulario','agente','','','agente','','');
select ('Técnica','formulario','tecnica','','','tecnica','','');
select ('Tipo de Prueba','formulario','tipo_prueba','','','tipo_prueba','','');
select ('Tipo de Muestra y Medios de Transporte','formulario','tipo_muestra_transporte','','','tipo_muestra_transporte','','');
select ('Temperatura','formulario','temperatura','','','temperatura','','');
boton('Guardar','formulario','guardar_prueba','guardar_prueba','','');
formulario_cierre();
		
?>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="info_2" -->
<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>