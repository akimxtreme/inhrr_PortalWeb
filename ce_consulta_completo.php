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
<?php
$cod = $_SESSION['cod'];
if($cod == 1){
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
}else {
	echo '
	<div class="cv">
	<h1 class="cv">Acceso Denegado - Espacio de Administrador</h1>
	<a href="cv_acceso.php"><h4 class="cv">Volver a la página principal</h4></a>
	</div>
	';
	}
?>

<?php
include "conexion.php";
$id=$_POST['ced_1'];

?>


<form class="cv" method="post" action="" onsubmit="">

<!-- DATOS: BÁSICOS-->
<h2 class="cv">Datos Básicos</h2>
<div class="cv">
<?php

$sql1 = "SELECT * FROM control_de_expedientes WHERE ce_cedula='$id'";
$consulta1 = mysql_query($sql1,$conexion);
if(mysql_num_rows($consulta1)>0){
while($campo1 = mysql_fetch_object($consulta1)){
//Datos Básicos
    $ce_nombre_completo=$campo1->ce_nombre_completo;
    $ce_cedula=$campo1->ce_cedula;
	$ce_nacionalidad=$campo1->ce_nacionalidad;
    $ce_departamento=$campo1->ce_departamento;
	$cod_carnet=$campo1->cod_carnet;
	
	$st_cedula=$campo1->st_cedula;
    $st_foto=$campo1->st_foto;
	$st_curriculum=$campo1->st_curriculum;
    $st_partida_nacimiento=$campo1->st_partida_nacimiento;
	$st_titulo=$campo1->st_titulo;
	$st_titulo_cantidad=$campo1->st_titulo_cantidad;
    $st_certificado=$campo1->st_certificado;
	
	$st_certificado_cantidad=$campo1->st_certificado_cantidad;
    $st_reposo=$campo1->st_reposo;
	$st_reposo_cantidad=$campo1->st_reposo_cantidad;
    $st_amonestaciones=$campo1->st_amonestaciones;
	$st_amonestaciones_cantidad=$campo1->st_amonestaciones_cantidad;
	
	$st_plan_servicio=$campo1->st_plan_servicio;
    $ubicacion_actual=$campo1->ubicacion_actual;
	$descripcion_actual=$campo1->descripcion_actual;
    $fecha_actual=$campo1->fecha_actual;
	$ubicacion_anterior=$campo1->ubicacion_anterior;
	$descripcion_anterior=$campo1->descripcion_anterior;
    $fecha_anterior=$campo1->fecha_anterior;
}	
?>



<span class="cv">
<label class="cv">Nombre Completo</label>
<input class="cv" disabled="disabled" type="text" value="<?php echo $ce_nombre_completo;?>"/>
</span>
<span class="cv">
<label class="cv">Cédula de Identidad</label>
<input class="cv" type="text" name="ce_cedula" disabled="disabled"  value="<?php echo $ce_cedula;?>" id="ce_cedula"  />
</span>

<span class="cv">
<label class="cv">Nacionalidad</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $ce_nacionalidad;?>" />
</span>

<span class="cv">
<label class="cv">Departamento</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $ce_departamento;?>" />
</span>

<span class="cv">
<label class="cv">Código del Carnet</label>
<input class="cv" type="text" name="cod_carnet" disabled="disabled"  value="<?php echo $cod_carnet;?>" />
</span>
<h2 class="cv">Control de Expedientes</h2>
<span class="cv">
<label class="cv">Copia de la Cédula</label>
<input class="cv" type="text" onkeypress="return soloLetras(event);" id="st_cedula" name="st_cedula" disabled="disabled"  maxlength="2" value="<?php echo $st_cedula;?>" />
<p class="obligatorio" id="obligatorio_st_cedula">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Fotografía</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" id="st_foto" name="st_foto" disabled="disabled"  maxlength="2" value="<?php echo $st_foto;?>" />
<p class="obligatorio" id="obligatorio_st_foto">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Sintesis Curricular</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" id="st_curriculum" disabled="disabled"  name="st_curriculum" maxlength="2"  value="<?php echo $st_curriculum;?>" />
<p class="obligatorio" id="obligatorio_st_curriculum">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Partida de Nacimiento</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);"  disabled="disabled"  id="st_partida_nacimiento" name="st_partida_nacimiento" maxlength="2"   value="<?php echo $st_partida_nacimiento;?>" />
<p class="obligatorio" id="obligatorio_st_partida_nacimiento">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Copia - Título(s)</label> 
<input class="cv" type="text"  onkeypress="return soloLetras(event);" disabled="disabled"  id="st_titulo" name="st_titulo" maxlength="2"  value="<?php echo $st_titulo;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>
<?php
if ($st_titulo == 'si'){
echo '<span class="cv">';
echo '<label class="cv">Nº de Titulo(s)</label>';
echo '<input class="cv" type="text" onkeypress=" return soloNumeros(event);" id="st_titulo_cantidad" disabled="disabled"  name="st_titulo_cantidad" maxlength="2" value="';
echo $st_titulo_cantidad;
echo '" />';
echo '<p class="obligatorio" id="obligatorio_st_titulo_cantidad">Ingrese el nº Ej: 2</p>';
echo '</span>';
}
?>
<span class="cv">
<label class="cv">Copia - Certificado(s)</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" maxlength="2" disabled="disabled"  id="st_certificado" name="st_certificado"  value="<?php echo $st_certificado;?>" />
<p class="obligatorio" id="obligatorio_st_certificadoo">Ingrese si o no</p>
</span>

<?php
if ($st_certificado == 'si'){
echo '<span class="cv">';
echo '<label class="cv">Nº de Certificados(s)</label>';
echo '<input class="cv" type="text"   onkeypress=" return soloNumeros(event);" disabled="disabled"  id="st_certificado_cantidad" name="st_certificado_cantidad" maxlength="2" value="';
echo $st_certificado_cantidad;
echo '" />';
echo '<p class="obligatorio" id="obligatorio_st_certificado_cantidad">Ingrese el nº Ej: 2</p>';
echo '</span>';
}
?>

<span class="cv">
<label class="cv">Copia - Reposo(s)</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" maxlength="2" id="st_reposo" disabled="disabled"  name="st_reposo" value="<?php echo $st_reposo;?>" />
<p class="obligatorio" id="obligatorio_st_reposo">Ingrese si o no</p>
</span>

<?php
if ($st_reposo == 'si'){
echo '<span class="cv">';
echo '<label class="cv">Nº de Reposo(s)</label>';
echo '<input class="cv" type="text"   onkeypress=" return soloNumeros(event);" disabled="disabled"  id="st_reposo_cantidad" name="st_reposo_cantidad" maxlength="2" value="';
echo $st_reposo_cantidad;
echo '" />';
echo '<p class="obligatorio" id="obligatorio_st_reposo_cantidad">Ingrese el nº Ej: 2</p>';
echo '</span>';
}
?>

<span class="cv">
<label class="cv">Copia - Amonestación(es)</label>
<input class="cv" type="text"   onkeypress="return soloLetras(event);" maxlength="2" id="st_amonestaciones" name="st_amonestaciones" disabled="disabled"  value="<?php echo $st_amonestaciones;?>" />
<p class="obligatorio" id="obligatorio_st_amonestaciones">Ingrese si o no</p>
</span>

<?php
if ($st_amonestaciones == 'si'){
echo '<span class="cv">';
echo '<label class="cv">Nº de Amonestación(es)</label>';
echo '<input class="cv" type="text"   onkeypress=" return soloNumeros(event);" maxlength="2" id="st_amonestaciones_cantidad" disabled="disabled"  name="st_amonestaciones_cantidad" value="';
echo $st_amonestaciones_cantidad;
echo '" />';
echo '<p class="obligatorio" id="obligatorio_st_amonestaciones_cantidad">Ingrese el nº Ej: 2</p>';
echo '</span>';
}
?>

<span class="cv">
<label class="cv">Plan de Servicio</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" maxlength="2" id="st_plan_servicio" name="st_plan_servicio" disabled="disabled"  value="<?php echo $st_plan_servicio;?>" />
<p class="obligatorio" id="obligatorio_st_plan_servicio">Ingrese si o no</p>
</span>
<h2 class="cv">Ubicación Actual</h2>
<span class="cv">
<label class="cv">Ubicación Actual</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $ubicacion_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Descripcion Ubicación Actual</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $descripcion_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Fecha</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $fecha_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>
<?php
if ($ubicacion_anterior !== ''){
echo '<h2 class="cv">Ubicación Anterior</h2>';
echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="ubicacion_anterior" disabled="disabled"  value="';
echo $ubicacion_anterior;
echo '" />';
echo '</span>';

echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="descripcion_anterior" disabled="disabled" value="';
echo $descripcion_anterior;
echo '" />';
echo '</span>';

echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="fecha_anterior" disabled="disabled"  value="';
echo $fecha_anterior;
echo '" />';
echo '</span>';
}
?>

<?php
}
?>
</div>
</form>


<!------------------------------------------------- FIN - SITIOS DE INTERES ---------------------------------------------------------------->
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>