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
<title>Curriculum en Linea</title>
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
<h1 class="cv">Espacio del Administrador</h1>
<a href="cv_administracion.php"><h4 class="cv_1">Principal</h4></a>
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
<a class="temas" href="cv.php" title="#">
<h3 class="temas">Agregar Sintesis Curricular</h3>
<img class="temas" alt="Agregar Sintesis Curricular" src="imagenes/img_cv/cv_4.png"/>
<p class="temas">Acceso directo al formulario principal de Sintesis Curricular</p>
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


<form class="cv" method="post" action="#" onsubmit="#">

<!-- DATOS: BÁSICOS-->
<h2 class="cv">Datos Básicos</h2>
<div class="cv">
<?php

$sql1 = "SELECT * FROM datos_basicos WHERE cedula='$id'";
$consulta1 = mysql_query($sql1,$conexion);
if(mysql_num_rows($consulta1)>0){
while($campo1 = mysql_fetch_object($consulta1)){
//Datos Básicos
    $nombre=$campo1->nombre;
    $nacionalidad=$campo1->nacionalidad;
	$cedula=$campo1->cedula;
    $genero=$campo1->genero;
	$estado_civil=$campo1->estado_civil;
	$pais_nacimiento=$campo1->pais_nacimiento;
    $correo=$campo1->correo;
	$p_vehiculo=$campo1->p_vehiculo;
    $p_licencia=$campo1->p_licencia;
	$telefono_habitacion=$campo1->telefono_habitacion;
	$telefono_movil=$campo1->telefono_movil;
    $direccion=$campo1->direccion;
	
}	



?>

<span class="cv">
<label class="cv">Nombre Completo</label>
<input class="cv" disabled="disabled" type="text" value="<?php echo $nombre;?>"/>
</span>
<span class="cv">
<label class="cv">Nacionalidad</label>
<input class="cv" disabled="disabled" type="text" value="<?php echo $nacionalidad;?>"/>
</span>

<span class="cv">
<label class="cv">Cédula de Identidad</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $cedula;?>" />
</span>

</span>
<span class="cv">
<label class="cv">Género</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $genero;?>" />
</span>

<span class="cv">
<label class="cv">Estado Civil</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $estado_civil;?>" />
</span>

<span class="cv">
<label class="cv">País de Nacimiento</label>
<input class="cv" type="text"  disabled="disabled" value="<?php echo $pais_nacimiento;?>" />
</span>
<span class="cv">
<label class="cv">Correo Electrónico</label>
<input class="cv" disabled="disabled" value="<? echo $correo;?>"/> 
</span>

<span class="cv">
<label class="cv">¿Posee Vehículo?</label>
<input class="cv" disabled="disabled" value="<? echo $p_vehiculo;?>"/> 
</span>

<span class="cv">
<label class="cv">¿Posee Vehículo?</label>
<input class="cv" type="text" disabled="disabled" value="<? echo $p_licencia;?>"/> 
</span>
<span class="cv">
<label class="cv">Teléfono (Local)</label>
<input class="cv" type="text" disabled="disabled" value="<? echo $telefono_habitacion;?>"/>
</span>
<span class="cv">
<label class="cv">Teléfono (Movil)</label>
<input class="cv" type="text" disabled="disabled" value="<? echo $telefono_movil;?>"/>
</span>

<span class="cv">
<label class="cv">Direccion</label>
<input class="cv" disabled="disabled" value="<? echo $direccion;?>"/>
</span>
<?php
}
?>
</div>
<!-- DATOS: ACADÉMICOS-->
<h2 class="cv">Datos Académicos</h2>
<div class="cv">
<?php

$sql2 = "SELECT * FROM estudios WHERE cedula='$id'";
$consulta2 = mysql_query($sql2,$conexion);
if(mysql_num_rows($consulta2)>0){
while($campo2 = mysql_fetch_object($consulta2)){
//Datos Académicos
//n°1
    $nivel=$campo2->nivel;
    $titulo=$campo2->titulo;
	$carrera=$campo2->carrera;
    $instituto=$campo2->instituto;
	$pais=$campo2->pais;
	$anio_egreso=$campo2->anio_egreso;
//n°2
	$nivel_2=$campo2->nivel_2;
    $titulo_2=$campo2->titulo_2;
	$carrera_2=$campo2->carrera_2;
    $instituto_2=$campo2->instituto_2;
	$pais_2=$campo2->pais_2;
	$anio_egreso_2=$campo2->anio_egreso_2;
    
	
}	

?>
<h3 class="cv">Estudio N°1</h3>
<span class="cv">
<label class="cv">Nivel</label>
<input class="cv" disabled="disabled" value="<? echo $nivel;?>"/>
</span>

<span class="cv">
<label class="cv">Título</label>
<input class="cv" disabled="disabled" value="<? echo $titulo;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Carrera</label>
<input class="cv" disabled="disabled" value="<? echo $carrera;?>" id="titulo" name="titulo" type="text"/>
</span>


<span class="cv">
<label class="cv">Instituto</label>
<input class="cv" disabled="disabled" value="<? echo $instituto;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $pais;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Año de Egreso</label>
<input class="cv" disabled="disabled" value="<? echo $anio_egreso;?>" id="titulo" name="titulo" type="text"/>
</span>
<h3 class="cv">Estudio N° 2</h3>
<span class="cv">
<label class="cv">Nivel</label>
<input class="cv" disabled="disabled" value="<? echo $nivel_2;?>"/>
</span>

<span class="cv">
<label class="cv">Título</label>
<input class="cv" disabled="disabled" value="<? echo $titulo_2;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Carrera</label>
<input class="cv" disabled="disabled" value="<? echo $carrera_2;?>" id="titulo" name="titulo" type="text"/>
</span>


<span class="cv">
<label class="cv">Instituto</label>
<input class="cv" disabled="disabled" value="<? echo $instituto_2;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $pais_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Año de Egreso</label>
<input class="cv" disabled="disabled" value="<? echo $anio_egreso_2;?>" id="titulo" name="titulo" type="text"/>
</span>
</div>

<?php
}
?>
<!-- DATOS: LABORALES-->
<h2 class="cv">Datos Laborales</h2>
<div class="cv">
<h3 class="cv">(Mencione los dos trabajos mas recientes)</h3>
<?php
$sql3 = "SELECT * FROM datos_laborales WHERE cedula='$id'";
$consulta3 = mysql_query($sql3,$conexion);
if(mysql_num_rows($consulta3)>0){
while($campo3 = mysql_fetch_object($consulta3)){
//Datos Académicos
//n°1
    $cargo=$campo3->cargo;
	$empresa=$campo3->empresa;
	$fecha_inicio=$campo3->fecha_inicio;
	$fecha_fin=$campo3->fecha_fin;
	$l_pais=$campo3->l_pais;
	$funciones=$campo3->funciones;   
//n°2
	$cargo_2=$campo3->cargo_2;
	$empresa_2=$campo3->empresa_2;
	$fecha_inicio_2=$campo3->fecha_inicio_2;
	$fecha_fin_2=$campo3->fecha_fin_2;
	$l_pais_2=$campo3->l_pais_2;
	$funciones_2=$campo3->funciones_2;  
	
}	

?>

<span class="cv">
<label class="cv">Cargo</label>
<input class="cv" disabled="disabled" value="<? echo $cargo;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Empresa</label>
<input class="cv" disabled="disabled" value="<? echo $empresa;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Fecha de inicio</label>
<input class="cv" disabled="disabled" value="<? echo $fecha_inicio;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">	
<label class="cv">fecha de retiro</label>
<input class="cv" disabled="disabled" value="<? echo $fecha_fin;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $l_pais;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Funciones</label>
<input class="cv" disabled="disabled" value="<? echo $funciones;?>" id="titulo" name="titulo" type="text"/>
</span>
<h3 class="cv">N°2</h3>	
<span class="cv">
<label class="cv">Cargo</label>
<input class="cv" disabled="disabled" value="<? echo $cargo_2;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Empresa</label>
<input class="cv" disabled="disabled" value="<? echo $empresa_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Fecha de inicio</label>
<input class="cv" disabled="disabled" value="<? echo $fecha_inicio_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">	
<label class="cv">fecha de retiro</label>
<input class="cv" disabled="disabled" value="<? echo $fecha_fin_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $l_pais_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Funciones</label>
<input class="cv" disabled="disabled" value="<? echo $funciones_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<?php
}
?>
</div>



<!-- DATOS: CURSOS-->

<h2 class="cv">Cursos</h2>
<div class="cv">
<?php

$sql4 = "SELECT * FROM cursos WHERE cedula='$id'";
$consulta4 = mysql_query($sql4,$conexion);
if(mysql_num_rows($consulta4)>0){
while($campo4 = mysql_fetch_object($consulta4)){
//Datos Académicos
//n°1
    $nombre_curso=$campo4->nombre_curso;
	$instituto_curso=$campo4->instituto_curso;
	$pais_curso=$campo4->pais_curso;
	$anio_egreso_curso=$campo4->anio_egreso_curso;
	$horas_cursadas=$campo4->horas_cursadas;
	
//n°2
	 $nombre_curso_2=$campo4->nombre_curso_2;
	$instituto_curso_2=$campo4->instituto_curso_2;
	$pais_curso_2=$campo4->pais_curso_2;
	$anio_egreso_curso_2=$campo4->anio_egreso_curso_2;
	$horas_cursadas_2=$campo4->horas_cursadas_2;
	
}	

?>

<h3 class="cv">Curso N°1</h3>
<span class="cv">
<label class="cv">Nombre de Curso</label>
<input class="cv" disabled="disabled" value="<? echo $nombre_curso;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Instituto</label>
<input class="cv" disabled="disabled" value="<? echo $instituto_curso;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $pais_curso;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">	
<label class="cv">Año de Egreso</label>
<input class="cv" disabled="disabled" value="<? echo $anio_egreso_curso;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Horas Cursadas</label>
<input class="cv" disabled="disabled" value="<? echo $horas_cursadas;?>" id="titulo" name="titulo" type="text"/>
</span>

<?php
}
?>
<h3 class="cv">N°2</h3>
<span class="cv">
<label class="cv">Nombre de Curso</label>
<input class="cv" disabled="disabled" value="<? echo $nombre_curso_2;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Instituto</label>
<input class="cv" disabled="disabled" value="<? echo $instituto_curso_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">País</label>
<input class="cv" disabled="disabled" value="<? echo $pais_curso_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">	
<label class="cv">Año de Egreso</label>
<input class="cv" disabled="disabled" value="<? echo $anio_egreso_curso_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Horas Cursadas</label>
<input class="cv" disabled="disabled" value="<? echo $horas_cursadas_2;?>" id="titulo" name="titulo" type="text"/>
</span>
</div>

<!-- DATOS: HABILIDADES-->

<h2 class="cv">Habilidades</h2>
<div class="cv">
<?php

$sql5 = "SELECT * FROM conocimientos WHERE cedula='$id'";
$consulta5 = mysql_query($sql5,$conexion);
if(mysql_num_rows($consulta5)>0){
while($campo5 = mysql_fetch_object($consulta5)){
//Datos Académicos
//n°1
    $habilidades=$campo5->habilidades;
	$ingles_oral=$campo5->ingles_oral;
	$ingles_lectura=$campo5->ingles_lectura;
	$ingles_escrito=$campo5->ingles_escrito;
		
}	

?>
<span class="cv">
<label class="cv">Habilidades</label>
<input class="cv" disabled="disabled" value="<? echo $habilidades;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Dominio Ingles (Oral)</label>
<input class="cv" disabled="disabled" value="<? echo $ingles_oral;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Dominio Ingles (Lectura)</label>
<input class="cv" disabled="disabled" value="<? echo $ingles_lectura;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Dominio Ingles (Escritura)</label>
<input class="cv" disabled="disabled" value="<? echo $ingles_escrito;?>" id="titulo" name="titulo" type="text"/>
</span>
<?php
}
?>
</div>
<!-- DATOS: REFERENCIAS-->
<h2 class="cv">Referencias</h2>
<div class="cv">

<?php

$sql6 = "SELECT * FROM referencias WHERE cedula='$id'";
$consulta6 = mysql_query($sql6,$conexion);
if(mysql_num_rows($consulta6)>0){
while($campo6 = mysql_fetch_object($consulta6)){
//Datos Académicos
//n°1
    $nombre_ref=$campo6->nombre_ref;
	$telefono_ref=$campo6->telefono_ref;
	$relacion_ref=$campo6->relacion_ref;
//n°2
	$nombre_ref_2=$campo6->nombre_ref_2;
	$telefono_ref_2=$campo6->telefono_ref_2;
	$relacion_ref_2=$campo6->relacion_ref_2;		
}	

?>
<h3 class="cv">Referencia N°1</h3>
<span class="cv">
<label class="cv">Nombre</label>
<input class="cv" disabled="disabled" value="<? echo $nombre_ref;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Teléfono</label>
<input class="cv" disabled="disabled" value="<? echo $telefono_ref;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Relación</label>
<input class="cv" disabled="disabled" value="<? echo $relacion_ref;?>" id="titulo" name="titulo" type="text"/>
</span>
<h3 class="cv">Referencia N°2</h3>
<span class="cv">
<label class="cv">Nombre</label>
<input class="cv" disabled="disabled" value="<? echo $nombre_ref_2;?>" id="titulo" name="titulo" type="text"/>
</span>

<span class="cv">
<label class="cv">Teléfono</label>
<input class="cv" disabled="disabled" value="<? echo $telefono_ref_2;?>" id="titulo" name="titulo" type="text"/>
</span>
<span class="cv">
<label class="cv">Relación</label>
<input class="cv" disabled="disabled" value="<? echo $relacion_ref_2;?>" id="titulo" name="titulo" type="text"/>
</span>
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