<?php include_once('funciones/plantillaMaestra.php'); ?>
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
<title>Plantilla Espacio - Nuestro Instituto</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
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

<!-- InstanceBeginEditable name="contenido" -->
<div class="contenido">

<h1 class="menu_izquierdo">Nuestro Instituto</h1>

<div class="menu_izquierdo">
<li class="menu_izquierdo"><a class="menu_izquierdo" href="nuestro_instituto.php" title="">Reseña Histórica</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="mision.php" title="#">Misión</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="vision.php" title="vision.php">Visión</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="valores.php" title="#">Valores</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="#" title="#">Políticas</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="#" title="#">Organigrama</a></li>
<li class="menu_izquierdo"><a class="menu_izquierdo" href="#" title="#">Representantes</a></li>
</div>
</div>
<!-- TemplateBeginEditable name="contenido-instituto" -->

<div class="menu_izquierdo_texto">
  <h1 class="menu_izquierdo_texto"> Reseña Histórica</h1>
  <img class="menu_izquierdo" title="Rafael Rangel" src="../imagenes/instituto_img/rafael_rangel.png"/>
  <p class="menu_izquierdo_texto">El Instituto Nacional de Higiene, fue creado por Decreto del Ejecutivo Nacional en fecha 17 de octubre de 1938 y publicado en la Gaceta Oficial de los Estados Unidos de Venezuela Nº 19.700 de fecha 18 de octubre de 1938, por elPresidente General Eleazar López Contreras, posteriormente por Decreto Nº 2104 de fecha 29 de marzo de 1977, se designa con el nombre de “Rafael Rangel”; desde su creación fue adscrito alMinisterio de Sanidad y Asistencia Social, actual Ministerio de Salud y Desarrollo Social.</p>
  
  <h2 class="menu_izquierdo_texto"> Reseña Histórica</h2>
  
  <p class="menu_izquierdo_texto">Dentro de las funciones que le fueron atribuidas estaba el constituirse en un organismo de apoyo para los Proyectos del Ministerio de Salud y Desarrollo Social.</p>
  <p class="menu_izquierdo_texto">En la actualidad el Instituto Nacional de Higiene “Rafael Rangel” se ha convertido en un Centro de Referencia Sanitaria para la prevención, vigilancia y control de la salud de los venezolanos, al producir bienes y dar servicios de calidad para satisfacer las demandas nacionales de agentes inmunizantes y de diagnóstico de enfermedades infecciosas.</p>
</div>

<div class="menu_izquierdo_img"><img src="../imagenes/instituto_img/fachada.png" title="Fotografia del INHRR-Sede" /></div>


<!-- TemplateEndEditable -->


<!-- INICIO - GALERIA -->

<!------------------------------------------------- FIN - SITIOS DE INTERES ---------------------------------------------------------------->
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>