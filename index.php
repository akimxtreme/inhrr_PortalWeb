<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/prototipo_2.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->	
<title>Portal Web del Instituto Nacional de Higiene Rafael Rangel</title>
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
<!-- InstanceBeginEditable name="slideshow" -->
	<?php slideShow(); ?>
<!-- InstanceEndEditable -->
	<?php
	menuSuperior();
	menuPrincipal();
	?>

<!-- InstanceBeginEditable name="contenido" -->
<!-- Contenedor -->
<div class="contenedor_0">
<div class="derecha">
    <?php
	oficinaVirtual();
	?>
	<div class="seccion_2 blanco">
		<a class="" href="red_nacional_laboratorios.php"><img alt="Mapa de la Red Nacional de Laboratorios de Salud Pública" src="imagenes/mapa_venezuela_mini.png" title="Mapa de la Red Nacional de Laboratorios de Salud Pública"/></a>
	</div>
	<!-- Scroll -->
	<div class="accesos_directos blanco">
		<div>
        <!-- Sistema: SIVERC -->
            <a class="" href="noticia23.php"><img class="centrar" alt="Sistema: SIVERC" src="imagenes/siverc_access.png" title="Sistema: SIVERC" /></a>
        </div>
		
		<div>
			<a class="" href="galeria_ppv_gp.php" title="Galeria de imágenes de la Planta Productora de Vacunas"><img class="centrar" alt="Galeria de Imágenes" src="imagenes/img_gp/pv.png" title="Galeria de imágenes de la Planta Productora de Vacunas"/></a>
		</div>
        <!--
        <div class="seccion_2">
            <a class="" href="http://www.youtube.com/InhrrOficial"><img class="centrar" alt="Canal de tv del INHRR" src="imagenes/tv.png" title="Canal de Tv del Instituto Nacional de Higiene Rafael Rangel" /></a>
        </div>
        -->
        <div>
        <!-- Especialidades Farmaceuticas -->
            <a class="" href="doc/rc_doc/ef23042013.pdf" target="_blank"><img class="centrar" alt="Especialidades Farmaceuticas" src="imagenes/ef.png" title="Especialidades Farmaceuticas" /></a>
        </div>
    
        <div>
        <!-- Productos Biologicos -->
            <a class="" href="doc/rc_doc/PB-15-07-2013.pdf" target="_blank"><img class="centrar" alt="Productos Biologicos" src="imagenes/pb.png" title="Productos Biologicos" /></a>
        </div>
                
        <div>
        <!-- Reconocimientos -->
            <a class="" href="reconocimientos.php"><img class="centrar" alt="Reconocimientos" src="imagenes/reconocimiento.png" title="Reconocimientos" /></a>
        </div>
        
        <div>
        <!-- Sitios de Interés-->
            <a class="" href="sitios.php"><img class="centrar" alt="Sitios de Interés" src="imagenes/sitios.png" title="Sitios de Interés" /></a>	
        </div>
	</div>
</div>
<!--Noticias -->
<iframe class="noticias" src="noticias_destacadas2.php"></iframe>

<?php productoServicio(); ?>
<div class="contenedor_0">

<!-- Reconocimientos -->
<!--<div class="seccion_2">
<h1 class="contenedor_0">RECONOCIMIENTOS</h1>
<p class="reconocimientos">Instituto Nacional de Higiene “Rafael Rangel” se efectuó 
el 17 de Diciembre de 2010, la segunda promoción de 
nuestros postgrados autorizados por el Consejo Nacional.</p>
<img class="reconocimientos" alt="#" title="Reconocimientos a Nuestros Trabajadores" src="#" />
</div>-->
</div>
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>