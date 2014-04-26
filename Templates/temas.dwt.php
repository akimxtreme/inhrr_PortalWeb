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
<title>Portal Web del Instituto Nacional de Higiene Rafael Rangel</title>
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
<!-- Contenedor -->
<div class="contenedor_0">
<!-- Oficina Virtual -->
<div class="seccion_1">
<h1 class="contenedor_0">TEMA - TITULO</h1>
<p class="boton_global">Accesos directos a los sistemas más visitados</p>
<!--Boton: Sistema de Citas para Entrega de Solicitudes -->
<a class="boton_global" href="http://190.202.114.146:7474/modulos/" target="_blank">
<img class="boton_global" alt="#" src="../imagenes/citas.png" />
Sistema de Citas para Entrega de Solicitudes</a>
<!--Boton: Reporte de Reacciones Adversas a Medicamentos -->
<a class="boton_global" href="https://190.202.114.146:7575/inhrr/inicio.php" target="_blank">
<img class="boton_global" alt="Reacciones Adversas" src="../imagenes/atencion_al _paciente.png" />Reporte de Reacciones Adversas a Medicamentos.</a>
<!--Boton: Muestra para Estudios de Virus Influenza -->
<input type="checkbox" id="pop_1" class="popUpControl">
		<label id="pop" for="pop_1">
		   <span><div class="boton_global"><img class="boton_global" alt="Virus de Influenza" src="../imagenes/medicamentos.png" />Sistema de Informacion de Medicamentos</div></span>
		   <span class="box" id="box_1">
			   <a class="acceso" href="http://localhost/ef/aprobados_int/efaprobadas.php"><img class="acceso" src="../imagenes/img_accesos/farmacos_aprobados.png"></a>
               <a class="acceso" href="http://localhost/ef/cancelados_int/efcanceladas.php"><img class="acceso" src="../imagenes/img_accesos/farmacos_cancelados.png"></a>
           </span>
		</label>
        
        
        
<!--Boton: Consulta de Resultados de Alimentos -->
<a class="boton_global" href="http://localhost/pa/resultados_alimentos.php" target="_parent"><img class="boton_global" alt="Consulta de Resultados de Alimentos" src="../imagenes/alimentos.png" />Consulta de Resultados de Alimentos.</a>
<!--Boton: Catálogo en Línea "Biblioteca" -->
<a class="boton_global" href="http://190.202.114.146:7878/inh/index.htm" target="_blank"><img class="boton_global" alt="Biblioteca" src="../imagenes/Biblioteca.png" />Catálogo en Línea &quot;Biblioteca&quot;.</p></a>
<!--Boton: Catálogo en Línea "Productos Biologicos" -->
<input type="checkbox" id="pop_2" class="popUpControl_02">
		<label id="pop_02" for="pop_2">
		   <span><div class="boton_global"><img class="boton_global" alt="Biblioteca" src="../imagenes/Geringa.png" />Productos Biologicos en Venezuela</div></span>
		   <span class="box_02" id="box_2">
			   <a class="acceso" href="http://localhost/pb/aprobados_pb/pbaprobadas.php"><img class="acceso" src="../imagenes/img_accesos/biologicos_aprobados.png"></a>
               <a class="acceso" href="http://localhost/pb/cancelados_pb/pbcanceladas.php"><img class="acceso" src="../imagenes/img_accesos/biologicos_cancelados.png"></a>
           </span>
		</label>
        
  <!--Boton: Alerta de Medicamentos" -->
<input type="checkbox" id="pop_3" class="popUpControl_03">
		<label id="pop_03" for="pop_3">
		   <span><div class="boton_global"><img class="boton_global" alt="Alertas" src="../imagenes/imagenes/alerta.png" />Alertas de Medicamentos</div></span>
		   <span class="box_03" id="box_3">
			   <a class="acceso" href="../alertas_med_seguridad2.php" target="_parent"><img class="acceso" src="../imagenes/img_accesos/alerta_de_seguridad.png"></a>
               <a class="acceso" href="../alertas_med_calidad.php"><img class="acceso" src="../imagenes/img_accesos/alerta_de_calidad.png"></a>
               <a class="acceso" href="../alertas_med_ilicitos.php"><img class="acceso" src="../imagenes/img_accesos/alerta_med_ilicito.png"></a>
           </span>
		</label>    
        
        
        
</div>
<!-- Accesos Directos -->
<div class="seccion_2">
<h1 class="contenedor_0">ACCESOS DIRECTOS</h1>
<iframe class="acceso" src="accesos.php"></iframe> 
</div>
<!-- Canal de Tv -->
<div class="seccion_3">
<h1 class="tv">CANAL DE TV</h1>
<a class="menu_ppal" href="http://www.youtube.com/InhrrOficial"><img class="tv" alt="Canal de tv del INHRR" src="../imagenes/tv.png" title="Canal de Tv del Instituto Nacional de Higiene Rafael Rangel" /></a>

<span class="tv">
<a class="menu_ppal" href="#"><img class="tv2" alt="Productos Naturales" src="../imagenes/tv_productos_naturales.png" title="Productos Naturales"/></a>
<h3 class="tv">Productos Naturales</h3>
<a class="menu_ppal" href="#"><p class="tv">Ver video...</p></a>
</span>

<span class="tv">
<a class="menu_ppal" href="#"><img class="tv2" alt="División de Control Nacional" src="../imagenes/tv_div_control_nac.png" title="División de Control Nacional"/></a>
<h3 class="tv">Div. Control Nac...</h3>
<a class="menu_ppal" href="#"><p class="tv">Ver video...</p></a>
</span> 
</div>
<!-- Nuestros Servicios -->
<div class="seccion_1">
<h1 class="contenedor_0">NUESTROS SERVICIOS</h1>
<p class="boton_global">Productos y Servicios que brindamos a todos los ciudadanos. Opciones catalogadas segun el tipo de usuario:</p>
<a class="boton_global" href="../unidad_atencion_paciente.php" target="_blank">
<img class="boton_global" alt="#" src="../imagenes/Atencion al Paciente.png" />Exámenes Gratis con Previa Cita - Atención al Paciente</a>

<a class="boton_global" href="#" target="_blank">
<img class="boton_global" alt="Cursos y postgrados" src="../imagenes/book.png" />Dirigidos a Estudiantes - Cursos y Postgrados</a>

<a class="boton_global" href="../unidad_atencion_paciente.php" target="_blank">
<img class="boton_global" alt="Espacio para las empresas" src="../imagenes/Proyecto.png"/>Dirigido a  las Empresas</a>

<a class="boton_global" href="../unidad_atencion_paciente.php" target="_blank">
<img class="boton_global" alt="Espacio dirigido a profesionales" src="../imagenes/Sin título-6.png" />Dirigidos a Profesionales. (Biólogos, Químicos, entre otros...)</a>

</div>
</div>
<!-- Ingreso de Usuarios 
<div class="ingreso_usuario">
<form class="ingreso_usuario" method="post" name="ingreso" action="#">

<label class="ingreso_usuario">Usuario</label>
<input class="ingreso_usuario" type="text" name="usuario" maxlength="30" />

<label class="ingreso_usuario">Contraseña</label>
<input class="ingreso_usuario" type="password" name="contrasena" maxlength="12" />

<input type="checkbox" name="Recordarme"/>
<p class="ingreso_usuario">Recordarme</p>

<input class="ingreso_usuario_boton" name="Ingresar" type="button" title="Ingresar" value="Ingresar" />

<a class="ingreso_usuario" href="#" title="#">Recuperar Contraseña</a>
<a class="ingreso_usuario" href="#" title="#">Registrate Aquí</a>
</form> 
</div>
-->
<div class="contenedor_0">
<!-- Temas -->
<div class="seccion_1">
<h1 class="contenedor_0">TEMAS DE SEGURIDAD LABORAL, SALUD Y AMBIENTE</h1>
<!-- Tema: Enfermedades y Afecciones  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Enfermedades y Afecciones</h3>
<img class="temas" alt="Enfermedades y Afecciones" src="../imagenes/EnfermedadesyAfecciones.png"/>
<p class="temas">Asma, Alergia, Enfermedades Cardiovaculares...</p>
</a>
	<!-- Tema: Salud Ambiental  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Salud Ambiental</h3>
<img class="temas" alt="Temas Relacionados con la Salud Ambiental" src="../imagenes/Salud Ambiental.png"/>
<p class="temas">Contaminación del Aire, Monóxido de Carbono, Tabaquismo...</p>
</a>
	<!-- Tema: Seguridad y Salud en el Trabajo  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Seguridad y Salud en el Trabajo</h3>
<img class="temas" alt="Seguridad y Salud en el Trabajo" src="../imagenes/seguridad_trabajo.png" title="Seguridad y Salud en el Trabajo"/>
<p class="temas">Estres en el Trabajo...</p>
</a>
	<!-- Tema: Preparación en Caso de Emergencia  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Preparación en Caso de Emergencia</h3>
<img class="temas" alt="Preparación en Caso de Emergencia" src="../imagenes/preparacion_emergencia.png" title="Preparación en Caso de Emergencia" />
<p class="temas">Desastres Naturales, Biológicos...</p>
</a>
	<!-- Tema: Etapas de la Vida y Población  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Etapas de la Vida y Población</h3>
<img class="temas" alt="Etapas de la Vida y Población" src="../imagenes/etapas_de_vida.png" title="Etapas de la Vida y Población" />
<p class="temas">Adolescentes, Niños, Niñas, Mujeres...</p>
</a>
	<!-- Tema: Lesiones, Violencia y Seguridad  -->
<a class="temas" href="#" title="#">
<h3 class="temas">Lesiones, Violencia y Seguridad</h3>
<img class="temas" alt="Lesiones, Violencia y Seguridad" src="../imagenes/lesiones_violencia_seguridad.png" title="Lesiones, Violencia y Seguridad" />
<p class="temas">Caidas, Intoxicación...</p>
</a>
</div>
<!-- Reconocimientos -->
<!--
<div class="seccion_2">
<h1 class="contenedor_0">RECONOCIMIENTOS</h1>
<p class="reconocimientos">Instituto Nacional de Higiene “Rafael Rangel” se efectuó 
el 17 de Diciembre de 2010, la segunda promoción de 
nuestros postgrados autorizados por el Consejo Nacional.</p>
<img class="reconocimientos" alt="#" title="Reconocimientos a Nuestros Trabajadores" src="#" />
</div>
-->
<!-- Sitios de Interes -->
<div class="seccion_2">
<h1 class="contenedor_0">SITIOS DE INTERES</h1>
<iframe class="acceso" src="sitios_interes.php"></iframe> 
</div>
</div>
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>