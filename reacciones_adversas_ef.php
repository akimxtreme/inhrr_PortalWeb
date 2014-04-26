<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gerencia_rc.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerencia Sectorial de Registro y Control - Reporte de Reacciones Adversas y Fallas de Calidad de Especialidades Farmacéuticas</title>
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
<h1 class="contenedor_0">REPORTE DE REACCIONES ADVERSAS Y FALLAS DE CALIDAD DE ESPECIALIDADES FARMACÉUTICAS</h1>
<p class="boton_global">El Centro Nacional de Vigilancia Farmacológica (CENAVIF) adscrito a la Gerencia Sectorial de Registro y Control del INH”RR” es el encargado de la evaluación de los casos de reacciones adversas y fallas de calidad de medicamentos, para lo cual debe accesar a los vínculos:</p>
<!--Boton: Alerta de Medicamentos" -->
<input id="pop_3" class="popUpControl_03" type="checkbox">
		<label id="pop_03" for="pop_3">
		   <span><div class="boton_global"><img class="boton_global" alt="Alertas" src="imagenes/imagenes/alerta.png">Alertas de Medicamentos</div></span>
		   <span class="box_03" id="box_3">
			   <a class="acceso" href="alertas_med_seguridad2.php" target="_parent"><img class="acceso" src="imagenes/img_accesos/alerta_de_seguridad.png"></a>
               <a class="acceso" href="alertas_med_calidad.php"><img class="acceso" src="imagenes/img_accesos/alerta_de_calidad.png"></a>
               <a class="acceso" href="alertas_med_ilicitos.php"><img class="acceso" src="imagenes/img_accesos/alerta_med_ilicito.png"></a>
           </span>
		</label>  
<!--Boton: Reporte de Reacciones Adversas a Medicamentos -->
<a class="boton_global" href="https://190.202.114.146:7575/inhrr/inicio.php" target="_blank">
<img class="boton_global" alt="Reacciones Adversas" src="imagenes/atencion_al%20_paciente.png">Reporte de Reacciones Adversas a Medicamentos.</a>




</div>

<!-- InstanceEndEditable -->
<!-- Accesos Directos: Gerencia de Docencia e Investigación -->
<div class="derecha">
<div class="seccion_2">
<h1 class="contenedor_0">ACCESOS DIRECTOS</h1>
<h2 class="contenedor_0">Accesos directos al espacio de la Gerencia Sectorial de Registro y Control</h2>
<iframe class="acceso" src="accesos_rc.php"></iframe> 
</div>
<!-- Sitios de Interes: Gerencia de Docencia e Investigación -->
<div class="seccion_2">
<h1 class="contenedor_0">SITIOS DE INTERES</h1>
<h2 class="contenedor_0">Sitios de interés recomendados por la Gerencia Sectorial de Registro y Control</h2>
<iframe class="acceso" src="sitios_interes_rc.php"></iframe> 
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