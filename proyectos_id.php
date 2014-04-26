<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gerencia_id.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerencias de Docencia e Investigación - Proyectos</title>
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
<!-- Contenido -->
<div class="seccion_1">

<h3 class="contenedor_1">PROYECTOS</h3>

<p class="boton_global">Has click en la sección de tu interés:</p>
<a class="center" href="proyectos_ejecutados_id.php" title="Proyectos Ejecutados"><img class="global" src="imagenes/img_id/img_16.png" alt="Proyectos Ejecutados"/></a>

<a class="center" href="proyectos_financiados_id.php" title="Proyectos Financiados"><img class="global" src="imagenes/img_id/img_17.png" alt="Proyectos Financiados"/></a>




</div>

<!-- InstanceEndEditable -->
<div class="derecha">
<!-- Accesos Directos: Gerencia de Docencia e Investigación -->
<div class="seccion_2">
<h1 class="contenedor_0">ACCESOS DIRECTOS</h1>
<h2 class="contenedor_0">Accesos directos al espacio de la Gerencia de Docencia e Investigación</h2>
<iframe class="acceso" src="accesos_id.php"></iframe> 
</div>
<!-- Sitios de Interes: Gerencia de Docencia e Investigación -->
<div class="seccion_2">
<h1 class="contenedor_0">SITIOS DE INTERES</h1>
<h2 class="contenedor_0">Sitios de interés recomendados por la Gerencia de Docencia e Investigación</h2>
<iframe class="acceso" src="sitios_interes_id.php"></iframe> 
</div>
</div>
<!-- InstanceBeginEditable name="info_2" -->
<!-- Contenido -->

<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>