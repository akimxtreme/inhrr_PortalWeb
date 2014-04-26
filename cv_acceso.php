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
<title>INHRR - Sistema Automatizado de Sintesis Curriculares - Acceso Administrador</title>
<script type="text/javascript" src="js/scripts_cv.js"></script>
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
<form class="cv" method="post" action="cv_acceso_parametros.php" onsubmit="return global_acceso(this);">
<!-- Acceco al Sistema-->
<h1 class="cv">Sistema de Síntesis Curriculares y Control de Expedientes</h1>
<h2 class="cv">Acceso al sistema</h2>
<div class="cv">
<!-- usuario -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Usuario</label>
<input class="cv" id="usuario" name="usuario" onblur="acceso_obligatorio(this);" type="text"/>
<p class="obligatorio" id="obligatorio_usuario">Obligatorio: Ingrese el nombre de usuario</p>
</span>
<!-- clave -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Clave</label>
<input class="cv" id="clave" name="clave" onblur="acceso_obligatorio(this);" type="password"/>
<p class="obligatorio" id="obligatorio_clave">Obligatorio: Ingrese la contraseña</p>
</span>
<button class="cv" type="submit">Ingresar</button>
</div>
</form>
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>