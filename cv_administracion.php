<?php
session_start();
?>

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
<title>Espacio del Administrador</title>
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/scripts_cv.js"></script>
<script type="text/javascript" src="tcal.js"></script> 
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

<!-- InstanceBeginEditable name="contenido" -->
<?php
$cod = $_SESSION['cod'];
?>
<?php
if($cod == 1){
echo '
<div class="cv">
<h1 class="cv">Espacio del Administrador</h1>
<a href="destruir.php"><h4 class="cv">Cerrar sesión</h4></a>
<div class="seccion_1">
<h1 class="contenedor_0">SISTEMA AUTOMATIZADO DE SINTESIS CURRICULARES</h1>
<!-- Módulo 1: Consultar todos las Sintesis Curriculares  -->
<a class="temas" href="cv_consulta.php" title="#">
<h3 class="temas">Consultar todas las Sintesis Curriculares</h3>
<img class="temas" alt="Consultar todas las Sintesis Curriculares" src="imagenes/img_cv/cv_1.png"/>
<p class="temas">Consulta de todos los usuarios</p>
</a>
<!-- Módulo 2: Búsqueda de Sintesis Curricular por Campo  -->
<a class="temas" href="cv_buscar.php" title="#">
<h3 class="temas">Búsqueda por campo</h3>
<img class="temas" alt="Búsqueda de Sintesis Curricular por Campo" src="imagenes/img_cv/cv_2.png"/>
<p class="temas">Búsqueda de Sintesis Curricular por Campo</p>
</a>
<!-- Módulo 4: Agregar Sintesis Curricular -->
<a class="temas" href="cv.php" title="#" target="_blank">
<h3 class="temas">Agregar Sintesis Curricular</h3>
<img class="temas" alt="Agregar Sintesis Curricular" src="imagenes/img_cv/cv_4.png"/>
<p class="temas">Acceso directo al formulario principal de Sintesis Curricular</p>
</a>
</div>

<div class="cv">
<div class="seccion_1">
<h1 class="contenedor_0">CONTROL DE EXPEDIENTES</h1>
<!-- Módulo 1: Agregar Expediente  -->
<a class="temas" href="ce.php" title="#">
<h3 class="temas">Agregar Expediente</h3>
<img class="temas" alt="Agregar Expediente" src="imagenes/img_cv/cv_6.png"/>
<p class="temas">Módulo para agregar expedientes</p>
</a>
<!-- Módulo 2: Modificar Expediente  -->
<a class="temas" href="ce_modificar.php" title="#">
<h3 class="temas">Modificar Expediente</h3>
<img class="temas" alt="Modificar Expediente" src="imagenes/img_cv/cv_7.png"/>
<p class="temas">Módulo para modificar un expediente</p>
</a>
<!-- Módulo 3: Consulta de Expedientes -->
<a class="temas" href="ce_consulta.php" title="#">
<h3 class="temas">Consulta de Expedientes</h3>
<img class="temas" alt="Consulta de Expedientes" src="imagenes/img_cv/cv_5.png"/>
<p class="temas">Módulo para consultar todos los expedientes</p>
</a>
<!-- Módulo 4: Cambiar Ubicación -->
<a class="temas" href="ce_ubicacion.php" title="#">
<h3 class="temas">Modificar Ubicación</h3>
<img class="temas" alt="Consulta de Expedientes" src="imagenes/img_cv/cv_8.png"/>
<p class="temas">Módulo para modificar la ubicación del expediente</p>
</a>
</div>
</div>
';
}else {
	if($cod==''){
	echo '
	<div class="cv">
	<h1 class="cv">Acceso Denegado - Espacio de Administrador</h1>
	<a href="cv_acceso.php"><h4 class="cv">Volver a la página principal</h4></a>
	</div>
	';
	}
	}
?>

<!-- Módulo 3: Editar y Borrar  -->
<!--
<a class="temas" href="cv_editar_borrar.php" title="#">
<h3 class="temas">Editar y/o Borrar</h3>
<img class="temas" alt="Editar y/o Borrar" src="imagenes/img_cv/cv_3.png"/>
<p class="temas">Editar y/o Borrar la Sisntesis Cirruculares</p>
</a>
-->
<!------------------------------------------------- FIN - SITIOS DE INTERES ---------------------------------------------------------------->
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>