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
<title>Gerencia Sectorial de Registro y Control - Formularios - Especialidades Farmacéuticas y Materiales Médicos</title>
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
<?php
/*$conexion=mysql_connect('localhost','root','2006')
or die ("NO SE PUEDE CONECTAR");
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");*/


?>

<?php
//mysql_connect: Abre una conexión a un servidor MySQL
include_once('conexion/conexion_portal.php');


//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>




<div class="seccion_1">
<link href="css/organic_2.css" rel="stylesheet" type="text/css" />
    <script src='js/jquery.min.js'></script>
    <script src="js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            
    
        });
    </script>
<h1 class="contenedor_0">Formularios - Especialidades Farmacéuticas y Materiales Médicos</h1>
<!--<img class="global" src="imagenes/img_id/img_9.png" alt="Postgrado Micologia Medica"/>
<h2 class="contenedor_0">OBJETIVOS</h2>
<h2 class="contenedor_0">Generales</h2>
<p class="boton_global">Formar especialistas en Micología Médica, capacitados para diagnosticar, prevenir y dar seguimiento de las micosis que afectan a la población en Venezuela.</p>
<p class="boton_global">Formar especialistas en Micología Médica capaces de asesorar a los equipos de salud en materia de prevención de las micosis, así como en las pautas de tratamiento.</p>
<h2 class="contenedor_0">Específicos</h2>
<p class="boton_global">Capacitar a los profesionales en las técnicas para el diagnóstico micológico.</p>
<p class="boton_global">Formar a los participantes en la interpretación y análisis de los resultados del diagnóstico micológico.</p>
<p class="boton_global">Formar profesionales que sean capaces de orientar el tratamiento de las micosis.</p>
<p class="boton_global">Capacitar a los participantes en la formulación de programas comunitarios para la prevención y seguimiento de las micosis.</p>
<p class="boton_global">Estimular en el participante el trabajo en equipo, conducente a la atención integral del paciente con micosis.</p>-->


	<div id="page-wrap">
	
		
        <div id="example-one">
        			
        	<ul class="nav">
                <li class="nav-uno"><a href="#uno">Registro Sanitario</a></li>
                <li class="nav-dos"><a href="#dos" class="current">Cambios Post-Registro</a></li>
                <li class="nav-tres"><a href="#tres">Renovación</a></li>
                <li class="nav-cuatro"><a href="#cuatro">Protocolos Clínicos</a></li>
                
            </ul>
        	
        	<div class="list-wrap">
        	<!-- 1 Registro Sanitario -->
        		<ul id="uno" class="hide">
                <h2 class="contenedor_1">Registro Sanitario de Especialidades Farmacéuticas</h2>
                <p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                
   <table class="global">
   <tr>
   <td class="w50 global_titulo">Título</td>
   <td class="w20 global_titulo">Código</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
				<?php
				$urlf1="<a href='doc/rc_doc/rc_ef/";
				$urlf3="' title='Formulario ";
				$urlf2="' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_ef/";
				$urlf4="' title='Instructivo ";
				$urli2="' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'EF' AND tipo_tramite = 'REGISTRO SANITARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w50 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w20 global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf3 . $r['cod_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_inst'] . $urlf4 . $r['cod_form'] . $urlf2; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>
        
  
</ul>
        	<!-- 2 Cambios Post-Registro -->	 
        		 <ul id="dos" >
                 <h2 class="contenedor_1">Cambios Post-Registro Sanitario de Especialidades Farmacéuticas</h2>
                 <p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                 <p class="contenedor_1">Debe leer detenidamente cada Instructivo de cada uno de los Formularios que se presentan a continuación para que su evaluación sea exitosa.</p>
               
  <table class="global">
   <tr>
   <td class="w50 global_titulo">Título</td>
   <td class="w20 global_titulo">Código</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
				<?php
				$sql2 = "SELECT * FROM formularios WHERE tipo_producto = 'EF' AND tipo_tramite = 'CAMBIO POST-REGISTRO'";
				$q2 = mysql_query($sql2,$conexion);
				while($r=mysql_fetch_array($q2)){
				?> 
			<tr>
            
				<td class="w50 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w20 global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf3 . $r['cod_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_inst'] . $urlf4 . $r['cod_form'] . $urlf2; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>

        		 </ul> 
			<!-- 3 Renovación de Registro -->        		 
       		<ul id="tres" class="hide">
            <h2 class="contenedor_1">Renovación de Registro Sanitario de Especialidades Farmacéuticas</h2>
           
   		        <p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                <p class="contenedor_1">Debe leer detenidamente cada Instructivo de cada uno de los Formularios que se presentan a continuación para que su evaluación sea exitosa.</p>
                
  <table class="global">
   <tr>
  <td class="w50 global_titulo">Título</td>
   <td class="w20 global_titulo">Código</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
				<?php
				$sql3 = "SELECT * FROM formularios WHERE tipo_producto = 'EF' AND tipo_tramite = 'RENOVACION REGISTRO SANITARIO'";
				$q3 = mysql_query($sql3,$conexion);
				while($r=mysql_fetch_array($q3)){
				?> 
			<tr>
            <td class="w50 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w20 global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf3 . $r['cod_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_inst'] . $urlf4 . $r['cod_form'] . $urlf2; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>
			</ul>
</li>
        		 </ul>
        	<!-- 4 Protocolos Clínicos -->   	 
        	 <ul id="cuatro" class="hide">
             <h2 class="contenedor_1">Protocolos Clínicos</h2>
                <p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                <p class="contenedor_1">Debe leer detenidamente cada Instructivo de cada uno de los Formularios que se presentan a continuación para que su evaluación sea exitosa.</p>
                
  <table class="global">
   <tr>
   <td class="w50 global_titulo">Título</td>
   <td class="w20 global_titulo">Código</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
				<?php
				$sql3 = "SELECT * FROM formularios WHERE tipo_producto = 'EF' AND tipo_tramite = 'PROTOCOLOS CLINICOS'";
				$q3 = mysql_query($sql3,$conexion);
				while($r=mysql_fetch_array($q3)){
				?> 
			<tr>
            
				<td class="w50 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w20 global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf3 . $r['cod_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_inst'] . $urlf4 . $r['cod_form'] . $urlf2; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>
                  
      		  </ul>
    </li>
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