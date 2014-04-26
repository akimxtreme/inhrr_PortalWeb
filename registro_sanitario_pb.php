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
<title>Gerencia Sectorial de Registro y Control - Productos Biológicos (Registro Sanitario)</title>
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
<h1 class="contenedor_0">REGISTRO SANITARIO</h1>
<div class="menu_vertical">
<ol class="menu_vertical">
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Definiciones y Propósito" onclick="contenido_global(this);" name="1">Formularios e Instructivos para la Solicitud de Registro Sanitario</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Normativa" onclick="contenido_global(this);" name="2">Descripción del Proceso de entrega de una Solicitud de Registro Sanitario de Producto Biológico</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Propósitos de los Estudios de Bioequivalencia" onclick="contenido_global(this);" name="3">Solicitud de Información Adicional</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Propósitos de los Estudios de Bioequivalencia" onclick="contenido_global(this);" name="4">En Caso de Resultado de Evaluación Integral Conforme</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Propósitos de los Estudios de Bioequivalencia" onclick="contenido_global(this);" name="5">En Caso de Resultado de Evaluación Integral  NO Conforme</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Propósitos de los Estudios de Bioequivalencia" onclick="contenido_global(this);" name="6">Reconsideración del Dictamen</a></li>
<li class="menu_vertical"><a class="menu_vertical" href="#" title="Propósitos de los Estudios de Bioequivalencia" onclick="contenido_global(this);" name="7">Número de Registro Sanitario y Titular del Registro</a></li>
</ol> 
</div>
<div class="visible" id="1">
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/infogrid.js'></script>  


<p class="contenedor_1">Para descargar un Formulario ó Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>

<div id="page-wrap2">
		
		<div class="info-col">
		 		
    		  		
    		<dl>
    		  
				<?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				$urli3="' title='Anexo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				?>
                <?php
				
				
				//Llamado en la consulta

				require_once('funciones.php');
				$conector=ConectarBD();
				$sql1="SELECT * FROM formularios WHERE tipo_producto = 'PB'";
                $q=EjecuteExec($conector,$sql1) or die(mysql_error());
				
				if(NumFila($q)>0){
					while($r=ObtenerFila($q)){
						if($r[0]!=' '){
							echo '<dt>'. $r[3] .' &raquo;</dt>';
							echo '<dd>';
							echo'<table class="global">';
							if ($r[7]!=""){
							echo'
								   <tr>
								   <td class="w30 global_titulo">Título</td>
								   <td class="w20 global_titulo">Cod</td>
								   <td class="w20 global_titulo">Formulario</td>
								   <td class="w20 global_titulo">Instructivo</td>
									<td class="w10 global_titulo">Anexo</td>
									</tr>';
							}else{
								echo'
								<tr>
								   <td class="w40 global_titulo">Título</td>
								   <td class="w20 global_titulo">Cod</td>
								   <td class="w20 global_titulo">Formulario</td>
								   <td class="w20 global_titulo">Instructivo</td>
									
									</tr>';
								}
							if ($r[7]!=""){
							echo'<tr>';   	
							echo '<td class="w30 global ">'. $r[3] .'</td>';
							echo '<td class="w20 global_adjunto shadow">'.  $r[2] . '<br/><br/><br/><br/><br/><br/><br/><br/><br/></td>';
							echo '<td class="w20 global_adjunto ">'.  $urlf1 .  $r[4] . $urlf2 . '</td>';
							echo '<td class="w20 global_adjunto shadow">'.  $urli1 .  $r[5] . $urli2 . '<br/><br/><br/><br/><br/><br/><br/></td>';
							echo '<td class="w10 global_adjunto ">'.  $urli1 .  $r[7] . $urli3 . '</td>';
							}else{
								echo '<td class="w40 global ">'. $r[3] .'</td>';
								echo '<td class="w20 global_adjunto shadow">'.  $r[2] . '<br/><br/><br/><br/><br/><br/><br/><br/><br/></td>';
								echo '<td class="w20 global_adjunto ">'.  $urlf1 .  $r[4] . $urlf2 . '</td>';
								echo '<td class="w20 global_adjunto shadow">'.  $urli1 .  $r[5] . $urli2 . '<br/><br/><br/><br/><br/><br/><br/></td>';
								}
							echo '</tr>';
							echo'</table>';
							echo "</dd>";
						}
					}
				}
                
				?> 
               
			
            
              
    		</dl> 
		</div>
		
        
			
	</div>

</div>
<div class="contenido_global" id="2">
<h3 class="contenedor_1">Descripción del Proceso de Registro Sanitario de un Producto Biológico</h3>
<p class="boton_global">De conformidad con la Ley de Medicamentos y el Reglamento de la Ley del Ejercicio de la Farmacia, para obtener la autorización de expendio en todo el territorio nacional de un Producto Biológico, se debe cumplir con los requisitos establecidos en los Formularios para Solicitud de Registro Sanitario e Instructivos, discriminados según el tipo de producto biológico:</p>
<p class="boton_global"><strong>Pasos a Seguir:</strong></p>
<ol class="numero">
<li class="numero">Para cada tipo de producto biológico, debe completar el formulario de solicitud correspondiente, y presentar una copia adicional del mismo para ser sellado y firmado por el Departamento de Recepción y Coordinación de Productos Biológicos. </li>
<li class="numero">Preparar y separar los anexos legales, químico farmacéuticos, preclínicos y clínicos, según la categoría del producto biológico, ordenarlos en carpetas separadas e identificadas de acuerdo a lo indicado en el Anexo I del Instructivo correspondiente. Observar que algunos  anexos deben ser originales legalizados o en copias compulsadas.<br><br><br><img style="box-shadow: 0 0 3px #CCC; padding: 3px;" class="" alt="Formularios e Instructivos" title="Formularios e Instructivos" src="imagenes/img_rc/formulario_instructivo.png"/><br><br><b>El Patrocinante deberá revisar además, las Normas de la Junta Revisora de Productos Farmacéuticos, y la Norma para el Registro, Liberación de Lotes y Control de los Productos Biológicos (N-PERC-001), a los fines de garantizar que los recaudos suministrados, cumplen con lo establecido en dichas <a href="normas_pb.php"><strong>Normas.</strong></a> </b></li>

<li class="numero">Remitir la cantidad de muestras correspondientes según lo indicado en el Apéndice II del Instructivo respectivo por tipo de producto biológico a registrar. </li>
<li class="numero">Cancelar la tarifa de Registro Sanitario de Producto Farmacéutico, según la categoría del producto, depositando en la cuenta corriente del Instituto Nacional de Higiene "Rafael Rangel", <strong>Nº 0102-0132-28000869-9691, Banco de Venezuela</strong>. El monto a cancelar dependerá de la categoría del producto biológico a registrar, según la Gaceta Oficial de la República Bolivariana de Venezuela N° 39.819 del 13/12/2011. Considerar además, la Normativa para el Pago de los Servicios del INH”RR”, <a href="pdf/rc_pdf/P-178-2012-10-02-2012.pdf" target="_blank"><strong>Circular Nº P-178/2012 de fecha 10/02/2012.</strong></a></li>
<li class="numero">Inutilizar timbres fiscales por un valor de 0,02 UT por página de formulario.</li>
<li class="numero">Una vez que disponga de todos los recaudos, solicitar una cita para la entrega de la Solicitud de Registro, según se indica en el vinculo “Cita para Entrega de Solicitudes”.</li>
<li class="numero">El día de la cita en el Departamento de Recepción y Coordinación de Productos Biológicos, en el 2° piso del Edificio Sede del INH"RR", Ciudad Universitaria, Caracas, deberá hacer entrega del formulario, anexos, muestras, patrones, reactivos, depósito del pago de la tarifa respectiva con copia, y la constancia de la solicitud de la cita donde se indica la fecha de la misma. </li>
<li class="numero">El personal del Departamento de Recepción y Coordinación de Productos Biológicos  verificará la solicitud presentada, dará instrucciones para que el Patrocinante solicite la emisión de la factura por el pago efectuado, en la caja del INH”RR” ubicada en el 1º piso del edificio sede.</li>
<li class="numero">Posteriormente, el Patrocinante se dirige nuevamente al Departamento de Recepción y Coordinación de Productos Biológicos, con original y copia de la factura y el funcionario que lo atiende, le entregará el formulario F-RCPB-111 Constancia de Recepción de Solicitudes de Registro Sanitario de Productos Biológicos, sellado y firmado.</li>
<li class="numero">En un periodo de 20 días hábiles, se llevará a cabo el proceso de revisión de la solicitud, mediante la aplicación de los formularios:
    <ul class="vinetas">
        <!-- Falta Documento -->
        <li class="vinetas"><a href="#"><strong>F-RCPB-67 Revisión de  Solicitudes de Registro Sanitario de Vacunas,</strong></a></li>
        <!-- Falta Documento -->
        <li class="vinetas"><a href="#"><strong>F-RCPB-68 Revisión de  Solicitudes de Registro Sanitario de Hemoderivados y Afines</strong></a> y</li>
        <li class="vinetas"><a href="pdf/rc_pdf/F-RCPB-69.doc" target="_blank" title="Revisión de  Solicitudes de Registro Sanitario de Productos ADN recombinantes, Anticuerpos Monoclonales y Terapéuticos"><strong>F-RCPB-69 Revisión de  Solicitudes de Registro Sanitario de Productos ADN recombinantes, Anticuerpos Monoclonales y Terapéuticos,</strong></a></li>
    </ul>
<br><br>y <b>en caso de que cuente con todos los recaudos requeridos según la categoría del producto, la solicitud será admitida</b> y se informará al Patrocinante mediante la entrega de la copia del Formulario de Solicitud de Registro Sanitario correspondiente, con sello, firma y fecha de la respectiva admisión.</li>
<li class="numero">Si la solicitud <b>no es admitida, le será notificado al Patrocinante vía correo electrónico y deberá ser retirada, en un plazo no mayor de diez (10) días hábiles en el Departamento de Recepción y Coordinación de Productos Biológicos, de lunes a viernes, en el horario de 12 m a 1 pm</b>. El INH”RR” guardará para sus archivos, un ejemplar de la información digital recibida (CD’s).<br><br> En caso que la solicitud no sea retirada por el Patrocinante respectivo después del tiempo establecido, la Solicitud de Registro será cancelada y el expediente será eliminado.</li>
<li class="numero">Una vez solventadas las no conformidades que motivaron su rechazo, manteniendo inalterable el resto de la información, la <b>solicitud podrá ser nuevamente presentada</b> ante el Departamento de Recepción y Coordinación de Productos Biológicos, <b>hasta un máximo de dos reingresos</b>, en el lapso del periodo de vigencia del depósito, según lo establecido en la Circular “Normativa para la Cancelación de Pagos” <b>Circular Nº P-178/2012 de fecha 10/02/2012</b>, para lo cual deberá  solicitar una <b>cita para registro sanitario</b>.<br><br><b>De requerir un tercer reingreso, se considerará como una nueva solicitud, deberá llenar  un nuevo Formulario de Solicitud para el Registro correspondiente,  cancelar la tarifa respectiva y anexar además, el formulario de solicitud de registro sanitario anterior  y los informes que motivaron la devolución.</b> </li>
<li class="numero"><b>Es de hacer notar que la  admisión de la Solicitud de Registro Sanitario no implica la aprobación de la misma. </b></li>
<li class="numero">Una vez admitida la solicitud, es distribuida a los Departamentos responsables de evaluar la calidad, seguridad y eficacia del producto; que podrán solicitar información adicional, de ser requerida.</li>
</ol>
</div>
<div class="contenido_global" id="3">
<h3 class="contenedor_1">Solicitud de Información Adicional</h3>
<p class="boton_global">Si durante el proceso de evaluación de la solicitud, se detecta información faltante o requerida para completar el proceso, la División de Control Nacional de Productos Biológicos la solicitará mediante oficio dirigido al Patrocinante del producto.</p>
<p class="boton_global">El procedimiento de evaluación se detendrá hasta tanto envíe todos los recaudos requeridos en el oficio de faltantes, momento en el cual se inicia nuevamente el periodo de evaluación establecido.</p>
<p class="boton_global">De reiterarse el incumplimiento de la información requerida para establecer la calidad, seguridad y eficacia del producto, así como el balance beneficio – riesgo de su utilización, la solicitud será desincorporada del Sistema Nacional de Registro Sanitario de Medicamentos.</p>
<p class="boton_global">Para el sometimiento de una solicitud desincorporada, deberá reiniciarse todo el proceso de solicitud de registro sanitario descrito anteriormente.</p>
</div>
<div class="contenido_global" id="4">
<h3 class="contenedor_1">En Caso de Resultado de Evaluación Integral Conforme</h3>
<p class="boton_global">Una vez concluida la evaluación integral del producto por las unidades técnicas respectivas, la División de Control Nacional de Productos Biológicos efectúa la revisión y consolidación de los resultados emitidos, a través de la comisión evaluadora de esta División.</p>
<p class="boton_global">En caso de productos nuevos se solicitará además, la opinión de la Junta Revisora de Productos Farmacéuticos para la decisión respectiva. </p>
<p class="boton_global">En caso de ser satisfactorio el dictamen, se procede a la emisión del Oficio de Registro Sanitario respectivo, así como de las Condiciones de Comercialización autorizadas para el Producto Biológico registrado, que deberá ser retirado en el Departamento de Recepción y Coordinación de Biológicos, por el Farmacéutico Patrocinante respectivo.</p>
</div>

<div class="contenido_global" id="5">
<h3 class="contenedor_1">En Caso de Resultado de Evaluación Integral NO Conforme</h3>
<p class="boton_global">Una vez concluido el proceso, siendo  la conclusión de la evaluación de la calidad, seguridad y/o eficacia del producto biológico como no conforme, se procederá al rechazo de la solicitud de registro sanitario, indicando las razones que condujeron a este  dictamen.</p>
<p class="boton_global">El Patrocinante deberá retirar en el Departamento de Recepción y Coordinación de Biológicos, el Oficio de Rechazo del Registro Sanitario de Productos Biológicos y el expediente respectivo.</p>

</div>

<div class="contenido_global" id="6">
<h3 class="contenedor_1">Reconsideración del Dictamen</h3>
<p class="boton_global">El Patrocinante dispondrá de 15 días hábiles, para solicitar la reconsideración  de las condiciones de comercialización otorgadas o el rechazo de una solicitud de registro sanitario,  mediante oficio  dirigido a la Gerencia Sectorial de Registro y Control, con los soportes que avalen la reconsideración solicitada.</p>
<p class="boton_global">No se aceptara la presentación de recaudos de calidad, seguridad y eficacia, no consignados en la solicitud evaluada, en cuyo caso deberán proceder a  efectuar una nueva solicitud de registro sanitario o el cambio post-registro respectivo, según el caso.</p>

</div>

<div class="contenido_global" id="7">
<h3 class="contenedor_1">Número de Registro Sanitario y Titular del Registro</h3>
<p class="boton_global">En el caso de productos biológicos, el número de registro sanitario, está conformado por las siglas PB, que identifican al tipo de medicamento, seguido de un número correlativo y los últimos dos dígitos del año en que se otorga el registro sanitario.</p>
<p class="boton_global"><strong>Ejemplo: PB. 2.390/11 </strong></p>
<p class="boton_global">El titular del registro sanitario del producto aprobado, es la casa de representación en el país.</p>

</div>
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
<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>