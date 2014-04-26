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
<title>INHRR - Sistema Automatizado de Sintesis Curriculares</title>
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
<!-- INICIO - GALERIA -->
<form class="cv" method="post" action="procesar_cv.php" onsubmit="return global_pedir_cta(this);">
<!-- DATOS: BÁSICOS-->
<h1 class="cv">Sistema para Bolsa de Empleo</h1>
<!--<h1 class="cv">Sistema Automatizado de Sintesis Curriculares</h1>-->
<a href=""><h4 class="cv">* Campo Obligatorio</h4></a>
<h2 class="cv">Datos Básicos</h2>
<div class="cv">
<!-- nombre -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre Completo</label>
<input class="cv" id="nombre" name="nombre" onblur="revisarObligatorio(this);" type="text"/>
<p class="obligatorio" id="obligatorio_nombre">Obligatorio: Ingrese su Nombre Completo</p>
</span>
<!-- cedula -->
<span class="cv">
<span class="radio"><label class="radio"><strong class="cv">*</strong>Cédula de identidad</label>
<input class="radio" id="venezolano" name="nacionalidad"  type="radio" value="Venezolana" /><p class="radio">V</p>
<input class="radio" id="extranjero" name="nacionalidad"  type="radio" value="Extranjera" /><p class="radio">E</p>
</span>
<input class="cv" id="cedula" name="cedula"  type="text" onblur="revisarObligatorio(this);" />
<p class="obligatorio" id="obligatorio_cedula">Obligatorio: Ingrese el Nº de Cédula y Nacionalidad</p>
</span>
<!-- date -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Fecha de Nacimiento</label>
<input class="cv" type="text" id="date" name="date" rel="tcal" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_date">Obligatorio: Debe ingresar su Fecha de Nacimiento</p>
</span>
<!-- genero -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Género</label>
<select class="cv" id="genero" name="genero" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Masculino</option>
<option class="cv">Femenino</option>
</select>
<p class="obligatorio" id="obligatorio_genero">Obligatorio - Ingrese su tipo de Género</p>
</span>
<!-- Estado Civil -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Estado Civil</label>
<select class="cv" id="estado_civil" name="estado_civil" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Soltero(a)</option>
<option class="cv">Casado(a)</option>
<option class="cv">Divorciado(a)</option>
<option class="cv">Viudo(a)</option>
</select>
<p class="obligatorio" id="obligatorio_estado_civil">Obligatorio - Ingrese su Estado Civil actual</p>
</span>
<!-- País de Nacimiento -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>País de Nacimiento</label>
<select class="cv" id="pais_nacimiento" name="pais_nacimiento" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Argentina</option>
<option class="cv">Brasil</option>
<option class="cv">Colombia</option>
<option class="cv">República Bolivariana de Venezuela</option>
</select>
<p class="obligatorio" id="obligatorio_pais_nacimiento">Obligatorio - Ingrese su País de Nacimiento</p>
</span>
<!-- Correo Electrónico -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Correo Electrónico</label>
<input class="cv" id="correo" name="correo" type="text" onblur="revisarEmail(this);"/>
<p class="obligatorio" id="obligatorio_correo">Obligatorio - Ingrese su dirección de Correo Electrónico</p>
</span>
<!-- ¿Posee Vehículo? -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>¿Posee Vehículo?</label>
<select class="cv" id="p_vehiculo" name="p_vehiculo" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Si poseo</option>
<option class="cv">No poseo</option>
</select>
<p class="obligatorio" id="obligatorio_p_vehiculo">Obligatorio - Responda la Pregunta</p>
</span>
<!-- ¿Posee Licencia? -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>¿Posee Licencia?</label>
<select class="cv" id="p_licencia" name="p_licencia" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Si poseo</option>
<option class="cv">No poseo</option>
</select>
<p class="obligatorio" id="obligatorio_p_licencia">Obligatorio - Responda la Pregunta</p>
</span>
<!-- Teléfono (Local) -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Teléfono (Local)</label>
<input class="cv" id="telefono_habitacion" name="telefono_habitacion" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_telefono_habitacion">Campo obligatorio - Datos incorrectos</p>
</span>
<!-- Teléfono (Movil) -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Teléfono (Movil)</label>
<input class="cv" id="telefono_movil" name="telefono_movil" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_telefono_movil">Campo obligatorio - Datos incorrectos</p>
</span>
<!-- Dirección -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Dirección</label>
<input class="cv" id="direccion" name="direccion" type="number" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_direccion">Campo obligatorio - Datos incorrectos</p>
</span>
</div>
 <!-- DATOS: ACADÉMICOS-->
<h2 class="cv">Datos Académicos</h2>
<div class="cv">
<h3 class="cv">(Mencione los dos estudios mas recientes)</h3>
<!-- Nivel -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nivel</label>
<select class="cv" id="nivel" name="nivel" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Postgrado</option>
<option class="cv">Univesitaria</option>
<option class="cv">Universitaria (En curso)</option>
<option class="cv">Diversificada</option>
<option class="cv">Diversificada (En curso)</option>
</select>
<p class="obligatorio" id="obligatorio_nivel">Campo obligatorio - Datos incorrectos</p>
</span>
<!-- titulo -->
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Título</label>
<input class="cv" id="titulo" name="titulo" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_titulo">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Carrera</label>
<input class="cv" id="carrera" name="carrera" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_carrera">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Instituto</label>
<input class="cv" id="instituto" name="instituto" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_instituto">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="pais" name="pais" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_pais">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Año de Egreso</label>
<input class="cv" id="anio_egreso" name="anio_egreso" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_anio_egreso">Campo obligatorio - Datos incorrectos</p>
</span>
</div>
<h3 class="cv"></h3>	
<div class="cv">
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nivel</label>
<select class="cv" id="nivel_2" name="nivel_2" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Postgrado</option>
<option class="cv">Univesitaria</option>
<option class="cv">Universitaria (En curso)</option>
<option class="cv">Diversificada</option>
<option class="cv">Diversificada (En curso)</option>
</select>
<p class="obligatorio" id="obligatorio_nivel_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Título</label>
<input class="cv" id="titulo_2" name="titulo_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_titulo_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Carrera</label>
<input class="cv" id="carrera_2" name="carrera_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_carrera_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Instituto</label>
<input class="cv" id="instituto_2" name="instituto_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_instituto_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="pais_2" name="pais_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_pais_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Año de Egreso</label>
<input class="cv" id="anio_egreso_2" name="anio_egreso_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_anio_egreso_2">Campo obligatorio - Datos incorrectos</p>
</span>


</div>
<!-- DATOS: LABORALES-->
<h2 class="cv">Datos Laborales</h2>
<div class="cv">
<h3 class="cv">(Mencione los dos trabajos mas recientes)</h3>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Cargo</label>
<input class="cv" id="cargo" name="cargo" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cargo">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Empresa</label>
<input class="cv" id="empresa" name="empresa" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_empresa">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Fecha de inicio</label>
<input class="cv" id="fecha_inicio" name="fecha_inicio" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_fecha_inicio">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">	
<label class="cv"><strong class="cv">*</strong>fecha de retiro</label>
<input class="cv" id="fecha_fin" name="fecha_fin" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_fecha_fin">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="l_pais" name="l_pais" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_l_pais">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Funciones</label>
<input class="cv" id="funciones" name="funciones" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_funciones">Campo obligatorio - Datos incorrectos</p>
</span>
</div>
<h3 class="cv"></h3>	
<div class="cv">
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Cargo</label>
<input class="cv" id="cargo_2" name="cargo_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_cargo_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Empresa</label>
<input class="cv" id="empresa_2" name="empresa_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_empresa_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Fecha de inicio</label>
<input class="cv" id="fecha_inicio_2" name="fecha_inicio_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_fecha_inicio_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>fecha de retiro</label>
<input class="cv" id="fecha_fin_2" name="fecha_fin_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_fecha_fin_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="l_pais_2" name="l_pais_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_l_pais_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Funciones</label>
<input class="cv" id="funciones_2" name="funciones_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_funciones_2">Campo obligatorio - Datos incorrectos</p>
</span>
</div>
<!-- DATOS: CURSOS-->

<h2 class="cv">Cursos</h2>
<div class="cv">
<h3 class="cv">(Menciones mínimo dos Cursos Realizados)</h3>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre de Curso</label>
<input class="cv" id="nombre_curso" name="nombre_curso" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nombre_curso">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Instituto</label>
<input class="cv" id="instituto_curso" name="instituto_curso" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_instituto_curso">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="pais_curso" name="pais_curso" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_pais_curso">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Año de Egreso</label>
<input class="cv" id="anio_egreso_curso" name="anio_egreso_curso" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_anio_egreso_curso">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Horas Cursadas</label>
<input class="cv" id="horas_cursadas" name="horas_cursadas" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_horas_cursadas">Campo obligatorio - Datos incorrectos</p>
</span>

</div>
<h3 class="cv"></h3>
<div class="cv">
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre de Curso</label>
<input class="cv" id="nombre_curso_2" name="nombre_curso_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nombre_curso_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Instituto</label>
<input class="cv" id="instituto_curso_2" name="instituto_curso_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_instituto_curso_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>País</label>
<input class="cv" id="pais_curso_2" name="pais_curso_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_pais_curso_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Año de Egreso</label>
<input class="cv" id="anio_egreso_curso_2" name="anio_egreso_curso_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_anio_egreso_curso_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Horas Cursadas</label>
<input class="cv" id="horas_cursadas_2" name="horas_cursadas_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_horas_cursadas_2">Campo obligatorio - Datos incorrectos</p>
</span>


</div>
<!-- DATOS: HABILIDADES-->

<h2 class="cv">Habilidades</h2>
<div class="cv">

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Habilidades</label>
<input class="cv" id="habilidades" name="habilidades" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_habilidades">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Dominio Ingles (Oral)</label>
<select class="cv" id="ingles_oral" name="ingles_oral" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Básico</option>
<option class="cv">Intermedio</option>
<option class="cv">Avanzado</option>
</select>
<p class="obligatorio" id="obligatorio_ingles_oral">Obligatorio - Ingrese su tipo de Género</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Dominio Ingles (Lectura)</label>
<select class="cv" id="ingles_lectura" name="ingles_lectura" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Básico</option>
<option class="cv">Intermedio</option>
<option class="cv">Avanzado</option>
</select>
<p class="obligatorio" id="obligatorio_ingles_lectura">Obligatorio - Ingrese su tipo de Género</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Dominio Ingles (Escritura)</label>
<select class="cv" id="ingles_escrito" name="ingles_escrito" onblur="revisarObligatorio(this);"/>
<option class="cv">Seleccione...</option>
<option class="cv">Básico</option>
<option class="cv">Intermedio</option>
<option class="cv">Avanzado</option>
</select>
<p class="obligatorio" id="obligatorio_ingles_escrito">Obligatorio - Ingrese su tipo de Género</p>
</span>
</div>
<!-- DATOS: REFERENCIAS-->
<h2 class="cv">Referencias</h2>
<div class="cv">
<h3 class="cv">(Menciones mínimo dos referencias personales "familiares o no familiares")</h3>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre</label>
<input class="cv" id="nombre_ref" name="nombre_ref" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nombre_ref">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Teléfono</label>
<input class="cv" id="telefono_ref" name="telefono_ref" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_telefono_ref">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Relación</label>
<input class="cv" id="relacion_ref" name="relacion_ref" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_relacion_ref">Campo obligatorio - Datos incorrectos</p>
</span>
</div>
<h3 class="cv"></h3>	
<div class="cv">
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Nombre</label>
<input class="cv" id="nombre_ref_2" name="nombre_ref_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_nombre_ref_2">Campo obligatorio - Datos incorrectos</p>
</span>

<span class="cv">
<label class="cv"><strong class="cv">*</strong>Teléfono</label>
<input class="cv" id="telefono_ref_2" name="telefono_ref_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_telefono_ref_2">Campo obligatorio - Datos incorrectos</p>
</span>
<span class="cv">
<label class="cv"><strong class="cv">*</strong>Relación</label>
<input class="cv" id="relacion_ref_2" name="relacion_ref_2" type="text" onblur="revisarObligatorio(this);"/>
<p class="obligatorio" id="obligatorio_relacion_ref_2">Campo obligatorio - Datos incorrectos</p>
</span>
<button class="cv" type="submit">Enviar datos</button>
</div>


<div class="cv">
<a href="cv_acceso.php"><h4 class="cv">(&clubs;)</h4></a>
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