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
<title>INHRR - Control de Expedientes</title>
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
<!-- INICIO -->
<?php
echo '
<div class="cv">
<h1 class="cv">Control de Expedientes</h1>
<a href="cv_administracion.php"><h4 class="cv_1">Principal</h4></a>
<a href="destruir.php"><h4 class="cv">Cerrar sesión</h4></a>
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
?>
<form class="cv" method="post" action="procesar_ce.php" onsubmit="return expediente(this);">
<!-- DATOS: BÁSICOS-->

<h2 class="cv">Datos Básicos</h2>
<div class="cv">
<!-- ce_nombre_completo -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre Completo</label>
<input class="cv" id="ce_nombre_completo" name="ce_nombre_completo" onblur="revisarObligatorio_2(this);" type="text"/>
<p class="obligatorio" id="obligatorio_ce_nombre_completo">Obligatorio: Ingrese su Nombre Completo</p>
</span>
<!-- ce_cedula -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Cédula de identidad</label>
<input class="radio" id="ce_venezolano" name="ce_nacionalidad"  type="radio" value="Venezolana" /><p class="radio">V</p>
<input class="radio" id="ce_extranjero" name="ce_nacionalidad"  type="radio" value="Extranjera" /><p class="radio">E</p>
</span>
<input class="cv" id="ce_cedula" name="ce_cedula"  type="text" onblur="revisarObligatorio_2(this);" />
<p class="obligatorio" id="obligatorio_ce_cedula">Obligatorio: Ingrese el Nº de Cédula y Nacionalidad</p>
</span>
<!-- ce_departamento -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Departamento</label>
<select class="cv" id="ce_departamento" name="ce_departamento" onblur="revisarObligatorio_2(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Gerencia de RRHH</option>
<option class="cv">Gerencia de Docencia e Investigación</option>
<option class="cv">Gerencia Sectorial de Registro y Control</option>
<option class="cv">Gerencia Sectorial de Diagnóstico y Vigilancia Epidemiológica</option>
<option class="cv">Gerencia de Administración</option>
<option class="cv">Gerencia de Producción</option>
</select>
<p class="obligatorio" id="obligatorio_ce_departamento">Obligatorio - Seleccione el Departamento</p>
</span>
<!-- cod_carnet -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Codigo del Carnet del INHRR</label>
<input class="cv" id="cod_carnet" name="cod_carnet" onblur="revisarObligatorio_2(this);" type="text"/>
<p class="obligatorio" id="obligatorio_cod_carnet">Obligatorio: Ingrese el Código del Carnet (INHRR)</p>
</span>
</div>
 <!-- Control de Expedientes-->
<h2 class="cv">Control de Expedientes</h2>
<div class="cv">
<!-- st_cedula -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Copia de la Cédula</label>
<input class="radio" id="st_cedula_si" name="st_cedula"  type="radio" value="si" onclick="revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_cedula_no" name="st_cedula"  type="radio" value="no" onclick="revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<p class="obligatorio" id="obligatorio_st_cedula">Obligatorio: Seleccione una opción</p>
</span>
<!-- st_foto -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Fotografia tipo carnet</label>
<input class="radio" id="st_foto_si" name="st_foto"  type="radio" value="si" onclick="revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_foto_no" name="st_foto"  type="radio" value="no" onclick="revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<p class="obligatorio" id="obligatorio_st_foto">Obligatorio: Seleccione una opción</p>
</span>
<!-- st_curriculum -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Sintesis Curricular</label>
<input class="radio" id="st_curriculum_si" name="st_curriculum"  type="radio" value="si" onclick="revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_curriculum_no" name="st_curriculum"  type="radio" value="no" onclick="revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<p class="obligatorio" id="obligatorio_st_curriculum">Obligatorio: Seleccione una opción</p>
</span>
<!-- st_partida_nacimiento -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Partida de Nacimiento</label>
<input class="radio" id="st_partida_nacimiento_si" name="st_partida_nacimiento"  type="radio" value="si" onclick="revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_partida_nacimiento_no" name="st_partida_nacimiento"  type="radio" value="no" onclick="revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<p class="obligatorio" id="obligatorio_st_partida_nacimiento">Obligatorio: Seleccione una opción</p>
</span>
<!-- st_titulo -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Copia del Titulo</label>
<input class="radio" id="st_titulo_si" name="st_titulo"  type="radio" value="si"  onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_titulo_no" name="st_titulo"  type="radio" value="no" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<select class="cv" id="st_titulo" name="st_titulo_cantidad"  type="text" onblur="revisarObligatorio_2(this);" />
<option class="cv">1</option>
<option class="cv">2</option>
<option class="cv">3</option>
<option class="cv">4</option>
<option class="cv">5</option>
<option class="cv">6</option>
<option class="cv">7</option>
<option class="cv">8</option>
<option class="cv">9</option>
<option class="cv">10</option>
</select>
<p class="obligatorio" id="obligatorio_st_titulo">Obligatorio: Seleccione y/o rellene el campo</p>
</span>
<!-- st_certificado -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Certificado</label>
<input class="radio" id="certificado_si" name="st_certificado"  type="radio" value="si" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="certificado_no" name="st_certificado"  type="radio" value="no" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<select class="cv" id="ce_certificado" name="st_certificado_cantidad"  type="text" onblur="revisarObligatorio_2(this);" />
<option class="cv">1</option>
<option class="cv">2</option>
<option class="cv">3</option>
<option class="cv">4</option>
<option class="cv">5</option>
<option class="cv">6</option>
<option class="cv">7</option>
<option class="cv">8</option>
<option class="cv">9</option>
<option class="cv">10</option>
</select>
<p class="obligatorio" id="obligatorio_certificado">Obligatorio: Seleccione y/o relleno el campo</p>
</span>
<!-- st_reposo -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Reposo</label>
<input class="radio" id="ce_reposo_si" name="ce_reposo"  type="radio" value="si" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="ce_reposo_no" name="ce_reposo"  type="radio" value="no" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<select class="cv" id="ce_reposo" name="st_reposo_cantidad"  type="text" onblur="revisarObligatorio_2(this);" />
<option class="cv">1</option>
<option class="cv">2</option>
<option class="cv">3</option>
<option class="cv">4</option>
<option class="cv">5</option>
<option class="cv">6</option>
<option class="cv">7</option>
<option class="cv">8</option>
<option class="cv">9</option>
<option class="cv">10</option>
</select>
<p class="obligatorio" id="obligatorio_reposo">Obligatorio: Seleccione y/o relleno el campo</p>
</span>
<!-- st_Amonestaciones -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Amonestaciones</label>
<input class="radio" id="st_amonestaciones_si" name="st_amonestaciones"  type="radio" value="si" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_amonestaciones_no" name="st_amonestaciones"  type="radio" value="no" onclick="cantidad(this);revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<select class="cv" id="st_amonestaciones" name="st_amonestaciones_cantidad"  type="text" onblur="revisarObligatorio_2(this);" />
<option class="cv">1</option>
<option class="cv">2</option>
<option class="cv">3</option>
<option class="cv">4</option>
<option class="cv">5</option>
<option class="cv">6</option>
<option class="cv">7</option>
<option class="cv">8</option>
<option class="cv">9</option>
<option class="cv">10</option>
</select>
<p class="obligatorio" id="obligatorio_st_amonestaciones">Obligatorio: Seleccione y/o relleno el campo</p>
</span>
<!-- st_plan_servicio -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Plan de Servicio</label>
<input class="radio" id="st_plan_servicio_si" name="st_plan_servicio"  type="radio" value="si" onclick="revisarObligatorio_2(this);" /><p class="radio">Si</p>
<input class="radio" id="st_plan_servicio_no" name="st_plan_servicio"  type="radio" value="no" onclick="revisarObligatorio_2(this);" /><p class="radio">No</p>
</span>
<p class="obligatorio" id="obligatorio_st_plan_servicio">Obligatorio: Seleccione y/o relleno el campo</p>
</span>
<button class="cv" type="submit" onclick="agregar_expediente(this);">Agregar Expediente</button>
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