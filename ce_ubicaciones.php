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


<form class="cv" method="post" action="ce_actualizar_ubicacion.php" onsubmit="return validar_nva_ubicacion(this);">

<!-- DATOS: BÁSICOS-->
<h2 class="cv">MODIFICAR UBICACIÓN</h2>
<h2 class="cv">DATOS BÁSICOS</h2>
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
<input class="cv" type="text" name="ce_nombre_completo" readonly="readonly" id="ce_nombre_completo" value="<?php echo $ce_nombre_completo;?>" />
</span>

<span class="cv">
<label class="cv">Cédula de Identidad</label>
<input class="cv" type="text" name="ce_cedula" readonly="readonly" id="ce_cedula" value="<?php echo $ce_cedula;?>" />
</span>

<h2 class="cv">Ingrese La Nueva Ubicación</h2>
<span class="cv">
<label class="cv">Nueva Ubicación</label>
<input class="cv" type="text"  onkeypress="return soloLetras(event);" id="ubicacion_actual" name="ubicacion_actual"/>
<p class="obligatorio" id="obligatorio_ubicacion_actual">Obligatorio: Ej: Gerencia de RRHH</p>
</span>

<span class="cv">
<label class="cv">Descripción</label>
<input class="cv" type="text" onkeypress="return soloLetras(event);" id="descripcion_actual" name="descripcion_actual"/>
<p class="obligatorio" id="obligatorio_descripcion_actual">Obligatorio ingrese una descripción</p>
</span>

<span class="cv">
<label class="cv">Nueva Fecha</label>
<input class="cv" type="text" name="fecha_actual" readonly="readonly" id="fecha_actual" value="<?php echo date("d-m-Y");?>" />
</span>
<button class="cv" type="submit">Actualizar Expediente</button>
<h2 class="cv">Ubicación Actual</h2>
<span class="cv">
<label class="cv">Ubicación Actual</label>
<input class="cv" type="text" name="ubicacion_anterior" readonly="readonly" value="<?php echo $ubicacion_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Descripcion Ubicación Actual</label>
<input class="cv" type="text" name="descripcion_anterior"  readonly="readonly" value="<?php echo $descripcion_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>

<span class="cv">
<label class="cv">Fecha</label>
<input class="cv" type="text" name="fecha_anterior" readonly="readonly" value="<?php echo $fecha_actual;?>" />
<p class="obligatorio" id="obligatorio_st_titulo">Ingrese si o no</p>
</span>

<?php
if ($ubicacion_anterior !== ''){
echo '<h2 class="cv">Ubicación Anterior</h2>';
echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="ubicacion_anterior"  value="';
echo $ubicacion_anterior;
echo '" />';
echo '</span>';

echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="descripcion_anterior"  value="';
echo $descripcion_anterior;
echo '" />';
echo '</span>';

echo '<span class="cv">';
echo '<label class="cv">Ubicación Anterior</label>';
echo '<input class="cv" type="text" name="fecha_anterior"  value="';
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