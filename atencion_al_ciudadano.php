<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/menu_superior.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Oficina de Atención al Ciudadano</title>
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


<!-- Contenedor -->
<div class="contenedor_0">
<!-- InstanceBeginEditable name="informacion" -->

<!-- Contenido -->
<div class="seccion_4">
<h1 class="contenedor_0">OFICINA DE ATENCIÓN AL CIUDADADO</h1>
<p class="columns">La Oficina de Atención al Ciudadano  (OAC) en el Instituto Nacional de Higiene "Rafael Rangel" fue creada recientemente y se encuentra ubicada en el Edificio Sede. En este espacio las ciudadanas y ciudadanos pueden recibir orientación e información directa, oportuna, organizada, comprensible, sobre algún tema de inquietud. Además se encarga de atender sus quejas, reclamos, denuncias, solicitud de información, cumpliendo  con la Constitución de la República Bolivariana de Venezuela.</p>


<p class="columns"><strong>Requisitos para presentar sus denuncias, quejas, reclamos, sugerencias o peticiones</strong></p>


<p class="columns">Para que sea válida, debe contener los siguientes datos:</p>

<ul class="vinetas">
<li class="vinetas">Nombre y Apellido</li>
<li class="vinetas">Cédula de Identidad</li>
<li class="vinetas">Correo Electrónico</li>
<li class="vinetas">Teléfono</li>
<li class="vinetas">Descripción detallada, clara y precisa sobre el hecho o solicitud.</li>
</ul>

<p class="columns"><strong>No se recibirán denuncias anónimas. Garantizamos la confidencialidad de la información suministrada.</strong></p>

 

<p class="columns"><strong>Vías de Atención al Ciudadano</strong></p>

<ol class="numero">
<li class="numero">Correo electrónico</li>

<li class="numero">Formulario digital</li>

<li class="numero">Presencial</li>

<li class="numero">Telefónico</li>
</ol>

<div class="a_ciudadano">
<h2 class="contenedor_1">Vías de Atención al Ciudadano</h2>
<img class="a_ciudadano" id="formulario_ciudadano" src="imagenes/formulario.png" alt="Formulario Digital" title="Formulario para la Atención del Ciudadano" onclick="atencion_ciudadano(this);" />
<img class="a_ciudadano" id="correo_ciudadano" src="imagenes/correo.png" alt="Correo Electrónico de la Gerencia de Calidad" title="Correo Electrónico de la Gerencia de Calidad" onclick="atencion_ciudadano(this);" />
<img class="a_ciudadano"  id="telefonico__ciudadano" src="imagenes/telefonico.png" alt="Teléfono(s) de Atención al Ciudadano" title="Teléfono(s) de Atención al Ciudadano" onclick="atencion_ciudadano(this);" />
<img class="a_ciudadano" id="presencial_ciudadano" src="imagenes/presencial.png" alt="Dirección de La Gerencia de Calidad" title="Dirección de La Gerencia de Calidad" onclick="atencion_ciudadano(this);" />
</div>

<div class="a_ciudadano" id="formulario_ciudadano_1">
<form class="atencion_al_ciudadano" action="acciones.php" name="atencion_al_ciudadano" onsubmit="return ciudadano(this);" method="post">
<fieldset class="atencion_al_ciudadano"><legend class="atencion_al_ciudadano">Formulario de Atención al Ciudadano</legend>
<div class="org">
<label class="a_ciudadano">Nombre(s)</label>
<input class="a_ciudadano" placeholder="Ingrese..." type="text" name="nombre_ac" id="nombre_ac" onblur=""/>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Apellido(s)</label>
<input class="a_ciudadano" placeholder="Ingrese..." type="text" name="apellido_ac" id="apellido_ac" onblur=""/>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Correo Electrónico</label>
<input class="a_ciudadano" placeholder="Ingrese..." type="text" name="correo_ac" id="correo_ac" onblur=""/>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Teléfono</label>
<input class="a_ciudadano" placeholder="Ingrese..." type="text" name="telefono_ac" id="telefono_ac" onblur=""/>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Tema</label>
<select class="a_ciudadano" name="tema_ac" id="tema_ac" onchange="">
<option>Seleccione...</option>
<option>Denuncia</option>
<option>Petición</option>
<option>Queja</option>
<option>Reclamo</option>
<option>Sugerencia</option>
</select>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Título</label>
<input class="a_ciudadano" placeholder="Ingrese..." type="text" name="titulo_ac" id="titulo_ac" onblur=""/>
<strong class="a_ciudadano">*</strong>
</div>
<div class="org">
<label class="a_ciudadano">Escriba su mensaje</label>
<textarea class="a_ciudadano" placeholder="Ingrese..." name="mensaje_ac" id="mensaje_ac"  onblur=""></textarea>
<strong class="a_ciudadano">*</strong>
</div>
<strong class="a_ciudadano" id="a_ciudadano_o">(*) Campo Obligatorio</strong>
<!--<div class="org">
<label class="a_ciudadano">Ingrese el Código</label>
<input class="a_ciudadano" type="text" name="codigo" maxlength="5" onblur=""/>
<input class="boton_ciudadano" type="submit" name="Boton" value="Enviar" onclick="envio(this);"/>
</div>-->

<button class="boton_ciudadano" type="submit" name="boton_ac" id="boton_ac" value="Enviar">Enviar</button>
</fieldset>
</form>
</div>
<div class="a_ciudadano" id="correo_ciudadano_1">
<h3 class="contenedor_1">inhrr@inhrr.gob.ve</h3>
</div>
<div class="a_ciudadano" id="telefonico__ciudadano_1">
<h3 class="contenedor_1">Teléfono(s) de Atención al Ciudadano</h3>
<p class="a_ciudadano"><strong>Teléfono:</strong></p>

<ul class="vinetas">
<li class="vinetas">0212-219-1600</li>
</ul>

</div>
<div class="a_ciudadano" id="presencial_ciudadano_1">
<h3 class="contenedor_1">Ubicación</h3>
<iframe class="ubicacion" src="GoogleMapSlider/index.html"></iframe>
</div>
</div>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="info_2" -->
<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>