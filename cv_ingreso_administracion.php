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
<title>Curriculum en Linea</title>
<link href="css/estilos_cv.css" rel="stylesheet" type="text/css" />
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

<div id="contenedor_cv">

<!-- DATOS: BÁSICOS-->
<h2 class="cv">Curriculum en Linea: Espacio de Administración</h2>
<div class="cv">

<!-- INGRESO AL SISTEMA --> 

<form class="cv" id="" name="" action="cv_ingreso_sistema.php" method="post" onsubmit="return validar_usuario();">
<span>
<label class="cv">Usuario</label>
<input class="cv" id="usuario" name="usuario" type="text"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_usuario">Campo Obligatorio - Datos Incorrectos</p>
</span>
<span>
<label class="cv">Contrase&ntilde;a</label>
<input class="cv" id="contrasenia" name="contrasenia" type="password" maxlength="20" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_contrasenia">Campo Obligatorio - Datos Incorrectos</p>
</span>
<button class="bs_java">Ingresar</button>
</form>
</div>

</div>

<!------------------------------------------------- FIN - SITIOS DE INTERES ---------------------------------------------------------------->
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>