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
<title>Gerencia Sectorial de Registro y Control - Audiencia Consultas y Estatus</title>
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
<link href="css/organic_2.css" rel="stylesheet" type="text/css" />
    <script src='js/jquery.min.js'></script>
    <script src="js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            
    
        });
    </script>
<!-- Contenido -->
<div class="seccion_1">
<h1 class="contenedor_0">AUDIENCIAS, CONSULTAS Y ESTATUS</h1>


	<div id="page-wrap">
	
		
        <div id="example-one">
        			
        	<ul class="nav">
                <li class="nav-uno"><a href="#uno" class="current">Audiencias</a></li>
                <li class="nav-dos"><a href="#dos">Solicitud de Estatus</a></li>
                <li class="nav-tres"><a href="#tres">Consultas</a></li>
            </ul>
        	
        	<div class="list-wrap">
        	<!-- 1 Proceso de Preinscripción -->
        		<ul id="uno">
                <h3 class="contenedor_1">Audiencias</h3>
                <p class="boton_global">Las solicitudes de audiencia relacionadas con especialidades farmacéuticas   deberán ser solicitadas por el Farmacéutico Patrocinante a través del correo electrónico <strong>audienciasdivcmyc@inhrr.gob.ve</strong> indicando:</p>
                	<ul class="vinetas">
                		<li class="vinetas">Nombre del producto y Número de la solicitud, si procede</li>
                        <li class="vinetas">Nombre de la Casa de Representación.</li>
                        <li class="vinetas">Exposición de  los motivos que generan la solicitud de audiencia.</li>
                	</ul>
        		</ul>
        	<!-- 2 Plan de Estudios -->	 
        		 <ul id="dos" class="hide">
                 <h3 class="contenedor_1">Solicitud de Estatus</h3>
                <p class="boton_global">Las solicitudes de estatus de una solicitud correspondiente a  especialidades farmacéuticas  deberán ser solicitadas por el Farmacéutico Patrocinante a través del correo electrónico <strong>estatusdivcmyc@inhrr.gob.ve</strong> indicando:</p>
                	<ul class="vinetas">
                		<li class="vinetas">Nombre del producto.</li>
                        <li class="vinetas">Número de la solicitud.</li>
                        <li class="vinetas">Nombre de la Casa de Representación.</li>
                	</ul>
        		</ul>
                 
        		 </ul> 
			<!-- 3 Estudiantes -->        		 
       			 <ul id="tres" class="hide">
   		         <h3 class="contenedor_1">Consultas</h3>
                <p class="boton_global">Las consultas relacionadas con los procedimientos de evaluación de especialidades farmacéuticas o materiales médicos  deberán ser solicitadas a través del correo electrónico <strong>consultasdivcmyc@inhrr.gob.ve</strong></p>
                 </ul> 
        		 </ul>
        	
                   		 
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
		
	
	</div>

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