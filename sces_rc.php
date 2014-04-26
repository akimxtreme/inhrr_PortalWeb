<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gerencia_rc.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Información: Sistema de Citas para Entrega de Solicitudes</title>
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
<div class="seccion_1">
<h1 class="contenedor_0">SISTEMA DE CITAS PARA ENTREGA DE SOLICITUDES</h1>
<h2 class="contenedor_0">PROCEDIMIENTO</h2>
<p class="boton_global">Para obtener una cita para entrega de solicitudes debe seguir las siguientes instrucciones: </p>
<ol class="numero">
<li class="numero">Cancelar la tarifa respectiva a la solicitud a presentar, según Gaceta Oficial de la República Bolivariana de Venezuela, <strong>Nº 36.517</strong> del <strong>14/08/1998</strong>, en la cuenta corriente <strong>Nº 0102-0132-28000869-9691</strong>, del Instituto Nacional de Higiene “Rafael Rangel”, Banco de Venezuela, mediante depósito en el banco o a través de Internet. Considere el pago como la suma de la tarifa, si procede, de cada solicitud a presentar. <br /><br />Debe efectuar el deposito bancario una vez que cuente con <strong>TODOS LOS RECAUDOS REQUERIDOS</strong>. La vigencia de los depositos bancarios es de tres(3) meses a partir de la fecha en que se efectuo el deposito. Posteriormente, no se aceptara la solicitud ni se reembolzara el dinero. <br /><br /><strong>EL DEPOSITO DEBE COINCIDIR EXACTAMENTE CON LA TARIFA DEL TRAMITE A EFECTUAR. </strong></li>
<li class="numero">Accese a la página Web <strong>www.inhrr.gob.ve</strong> vínculo “Cita para entrega de Solicitudes” y luego "<strong class="verde"><a style="color:#FFFFFF;" href="http://190.202.114.146:7474/modulos/" title="Sistema: Cita para entrega de Solicitudes">Acceso al Sistema</a></strong>".</li>
<li class="numero">Seleccione el tipo de producto al cual corresponde la solicitud: Alimento, Cosmético, Biológico-Material Médico de Origen Biológico,  Especialidad Farmacéutica, Material Médico o Producto Natural. En caso de varios tipos de solicitudes, seleccione una y posteriormente, en la ventana siguiente podrá adicionar las demás solicitudes. Debe tomar en cuenta el número máximo permitido de solicitudes por cita. Ver vinculo <a href="#numero"  title="Número máximo permitido por citas">“Número máximo permitido por citas”.</a> </li>
<li class="numero">Complete los datos solicitados: Nombre del Patrocinante o Solicitante, Cedula de Identidad (C.I.), correo electrónico y Nombre del Representante.</li>
<li class="numero">Escoja el tipo y número de solicitudes a presentar. En caso de un número de solicitudes, mayor al permitido por cita, aparecerá un mensaje que le indica que ha excedido el límite y debe volver a comenzar.</li>
<li class="numero">Coloque el número y fecha del depósito o transferencia bancaria. En caso de solicitud(es), para la(s) cuales no procede el pago de tarifa, coloque cero (0) en el monto del depósito.</li>
<li class="numero">Una vez que todos los campos están llenos, haga clic en "Continuar".</li>
<li class="numero">Le será asignado el día y hora de su cita para la entrega de la solicitud(es) respectiva(s) si Ud. está de acuerdo haga clic sobre el botón "Confirmar", en caso contrario en haga clic sobre el botón <strong>"Cancelar"</strong> </li>
<li class="numero">Impríma el Comprobante Solicitud de Cita haciendo clic sobre el icono "Imprimir Comprobante".</li>
<li class="numero">Anexe a su solicitud, el recibo del depósito o transferencia bancaria y conserve copia del mismo.</li>
<li class="numero">Su factura será tramitada por la Unidad de Recepción respectiva.</li>
</ol>
<h2 id="numero" class="contenedor_0" >NÚMERO MÁXIMO DE SOLICITUDES POR CITA SEGÚN TIPO DE PRODUCTO:</h2>
<?php 
function tabla_inicio($titulo){
	echo'
	<table class="global" style="background:#FFFFFF; box-shadow: 0px 0px 3px #000000;">
  <!-- '. $titulo.' -->
  <tr>
    <td class="w100 global_titulo" style="background:#0066FF;">'. $titulo .'</td>
    
  </tr>
  <tr>
    <td class="w60 global_titulo">Solicitud</td>
    <td class="w40 global_titulo">Cantidad Máxima</td>
  </tr>
  ';
	
	}
function tabla_contenido($contenido1,$contenido2){
	echo'
	<tr>
    <td class="w60 global">'. $contenido1 .'</td>
    <td class="w40 global" style="background:#CCC; text-align:center;">'. $contenido2 .'</td>
  	</tr>
	';
	}
function tabla_nota($nota){
	echo'
	<tr>
    <td class="w100 global_titulo" style="text-align:justify;">'. $nota .'</td>
    </tr>
	';
	}
function tabla_fin(){
	echo'
	<tr>
  	<td class="w100 global" style="color:#0066FF; background:#0066FF;">----------------------------------------------------------------------------------------------------------------------------------------</td>
  	
  	</tr>
	</table>
	';
	}
?>

<?php 
// ALIMENTOS
tabla_inicio('ALIMENTOS');
tabla_contenido('Análisis de Alimentos','2');
tabla_contenido('Análisis de Licores','3');
tabla_fin();
// COSMÉTICOS
tabla_inicio('COSMÉTICOS');
tabla_contenido('Notificación Sanitaria','10');
tabla_contenido('Reconocimiento Incorporaciones','10');
tabla_contenido('Repetición de Análisis','10');
tabla_contenido('Solicitudes de Captación','20');
tabla_contenido('Cambio Post Registro','20');
tabla_contenido('Comunicaciones','20');
tabla_fin();
// BIOLÓGICOS
tabla_inicio('BIOLÓGICOS');
tabla_contenido('Registro Sanitario','2');
tabla_contenido('Protocolos Clínicos','2');
tabla_contenido('Renovación del Registro','3');
tabla_contenido('Liberación Lotes','10');
tabla_contenido('Cambios Postregistros','10');
tabla_fin();
// ESPECIALIDADES FARMACÉUTICAS
tabla_inicio('ESPECIALIDADES FARMACÉUTICAS');
tabla_contenido('Registro Sanitario','2');
tabla_contenido('Renovación de Productos','10');
tabla_contenido('Cambio País Fabricante','2');
tabla_contenido('Cambios Post-Registro','10');
tabla_contenido('Comunicaciones','10');
tabla_nota('Nota: Puede solicitar máximo 10 Renovaciones con 2 solicitudes adicionales (exceptuando Solicitud de Registro Categoria A) o hasta 20 Renovaciones (sin otras solicitudes).');
tabla_fin();
// MATERIALES MEDICOS
tabla_inicio('MATERIALES MEDICOS');
tabla_contenido('Análisis de Materiales Médicos','10');
tabla_fin();
// PRODUCTOS NATURALES
tabla_inicio('PRODUCTOS NATURALES');
tabla_contenido('Evaluación para Registro Sanitario','2');
tabla_contenido('Cambios Postregistro','10');
tabla_contenido('Comunicaciones','10');
tabla_fin();
?>
</div>

<!-- InstanceEndEditable -->
<!-- Accesos Directos: Gerencia de Docencia e Investigación -->
<div class="derecha">
<div class="seccion_2">
<h1 class="contenedor_0">ACCESOS DIRECTOS</h1>
<h2 class="contenedor_0">Accesos directos al espacio de la Gerencia Sectorial de Registro y Control</h2>
<iframe class="acceso" src="accesos_rc.php"></iframe> 
</div>
<!-- Sitios de Interes: Gerencia de Docencia e Investigación -->
<div class="seccion_2">
<h1 class="contenedor_0">SITIOS DE INTERES</h1>
<h2 class="contenedor_0">Sitios de interés recomendados por la Gerencia Sectorial de Registro y Control</h2>
<iframe class="acceso" src="sitios_interes_rc.php"></iframe> 
</div>
</div>
<!-- InstanceBeginEditable name="info_2" -->
<!-- Contenido -->

<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>