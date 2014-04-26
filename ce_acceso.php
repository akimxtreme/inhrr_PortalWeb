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
<title>INHRR - Sistema de Alerta de Medicamentos de Uso Humano</title>
<script type="text/javascript" src="js/funciones_ce.js"></script>
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
<div class="contenedor_0">
<h1 class="formulario">Sistema de Alerta de Medicamentos de Uso Humano</h1>
<?php
	// Se encuentran casi todos los códigos de PHP
	include ('funciones.php');
	// Formulario
	formulario_inicio("Acceso al Sistema","acceso_ce","cenavif_acceso","formulario","post","return ingreso(this);","ingreso_ce.php","");
  	//usuario
    input_text("Usuario","usuario","formulario","");
	//contrasenia
	input_password("Contraseña","contrasenia","formulario","");
	// boton: 
	button("Ingresar","ingresar","formulario","ingresar","");
	?>
    
   <?php
   formulario_inicio("Formulario de prueba","prueba","","formulario","post","return ingreso(this);","","");
   button("Modificar","modificar","formulario","modificar","");
   
   ?>
</div>
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>