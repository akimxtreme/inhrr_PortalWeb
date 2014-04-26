<?php include_once('funciones/plantillaMaestra.php'); ?>
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
<title>Sitios de Interés del INHRR</title>
<script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/infogrid.js'></script>   
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
<div class="sites">
	<h1>Sitios de Interés</h1>
	<div>
	<a href="sitios.php" title="#" onclick="contenido_global(this);" name="1">Todos los Sitios de Interés</a>
	<a href="#" title="#" onclick="contenido_global(this);" name="2">Agencias Regulatorias y Evaluadores de Medicamentos</a>
	<a href="#" title="#" onclick="contenido_global(this);" name="3">Gobierno</a>
	<a href="#" title="#" onclick="contenido_global(this);" name="4">Institutos de Investigación Nacional</a>
	<a href="#" title="#" onclick="contenido_global(this);" name="5">Institutos de Salud Nacionales e Internacionales</a>
    <a href="#" title="#" onclick="contenido_global(this);" name="6">Otros</a>
	</div>
    <div class="subsite" id="1">
	<h1>Todos los Sitios</h1>	    
    </div>
    <?php
	// Agencias Regulatorias y Evaluadores de Medicamentos
	site_inicio("2","Agencias Regulatorias y Evaluadores de Medicamentos");
		//Argentina
		sub_site_i("Argentina","argentina.png");
			links("","Ministerio de Salud","http://www.msal.gov.ar");
			links("ANMAT","Administración Nacional de Medicamentos, Alimentos y Tecnología Médica","http://www.anmat.gov.ar/");
		sub_site_f();
		//Armenia
		sub_site_i("Armenia","armenia.png");
			links("PHARM","Drug and Medical Technology Centre","http://www.pharm.am/");
			links("","Ministry of Health","http://www.moh.am/");
		sub_site_f();
		//Australia
		sub_site_i("Australia","australia.png");
			links("","Australia's Department of Health and Aged Care","http://www.health.gov.au/");
			links("TGA","Therapeutic Goods Administration","http://www.tga.gov.au/");
		sub_site_f();
		//Bahrain
		sub_site_i("Bahrain","bahrain.png");
			links("","Ministry of Health","http://www.moh.gov.bh/");
		sub_site_f();
		//Bangladesh
		sub_site_i("Bangladesh","bangladesh.png");
			links("","Ministry of Health","http://www.mohfw.gov.bd/");
		sub_site_f();
		//Belgica
		sub_site_i("Belgica","belgica.png");
			links("","Federal Public Service (FPS) Health, Food Chain Safety and Environment","http://www.health.belgium.be/");
		sub_site_f();
		//Botswana
		sub_site_i("Botswana","botswana.png");
			links("","Ministry of Health","http://www.moh.gov.bw/");
		sub_site_f();
		//Brasil
		sub_site_i("Brasil","brasil.png");
			links("Anvisa","Agencia Nacional de Vigilancia Sanitaria","http://www.anvisa.gov.br/esp/index.htm");
		sub_site_f();
		//Brunei
		sub_site_i("Brunei","brunei.png");
			links("","Ministry of Health","http://www.moh.gov.bn/");
		sub_site_f();
		//Bulgaria
		sub_site_i("Bulgaria","bulgaria.png");
			links("BDA","Bulgarian Drug Agency","http://www.bda.bg/");
		sub_site_f();
		//China
		sub_site_i("China","china.png");
			links("SFDA","State Food and Drug Administration","http://www.sfda.gov.cn/");
		sub_site_f();
		//Colombia
		sub_site_i("Colombia","colombia.png");
			links("INVIMA","Instituto Nacional de Vigilancia de Medicamentos y Alimentos","http://www.invima.gov.co/");
		sub_site_f();
		//Croacia
		sub_site_i("Croacia","croacia.png");
			links("","Ministry of Health and Social Welfare","http://www.mzss.hr/");
		sub_site_f();
		//Dinamarca
		sub_site_i("Dinamarca","dinamarca.png");
			links("","Danish Medicines Agency","http://www.dkma.dk/");
		sub_site_f();
		//Egipto
		sub_site_i("Egipto","egipto.png");
			links("","Ministry of Health and Population","http://www.mohp.gov.eg/");
		sub_site_f();
		//España
		sub_site_i("España","espania.png");
			links("AEMPS","Agencia Española de Medicamentos y Productos Sanitarios","http://www.agemed.es");
		sub_site_f();
		//Estados Unidos
		sub_site_i("Estados Unidos","estados_unidos.png");
			links("FDA","U S Food and Drug Administration","http://www.fda.gov/");
			links("CDC - ESPAÑOL","Centros para el Control y la Prevención de Enfermedades","http://www.cdc.gov/spanish/");
			links("CDC","Centers for Disease Control and Prevention","http://www.cdc.gov");
		sub_site_f();
		//Estonia
		sub_site_i("Estonia","estonia.png");
			links("","State Agency of Medicines","http://www.sam.ee/");
		sub_site_f();
		//Europa
		sub_site_i("Europa","europa.png");
			links("EMA","European Medicines Agency","http://www.ema.europa.eu/");
		sub_site_f();
		//Francia
		sub_site_i("Francia","francia.png");
			links("ANSM","Agence française de sécurité sanitaire des produits de santé","http://ansm.sante.fr/");
		sub_site_f();
		//República Checa
		sub_site_i("República Checa","republica_checa.png");
			links("","State Institute for Drug Control","http://www.sukl.cz/");
		sub_site_f();
		//Reino Unido
		sub_site_i("Reino Unido","reino_unido.png");
			links("MHRA","Medicines and Healthcare products Regulatory Agency","http://www.mhra.gov.uk/");
		sub_site_f();
	site_fin();
	// Gobierno
	site_inicio("3","Gobierno");
		sub_site_i("Gobierno","venezuela.png");
			links("MPPS","Ministerio del Poder Popular para la Salud","http://www.mpps.gob.ve/");
			links("INN","Instituto Nacional de Nutrición","http://www.inn.gob.ve/");
			links("SEFAR","Servicio Autónomo de Elaboraciones Farmacéuticas","http://www.sefar.gob.ve/");
			links("SACS","Servicio Autónomo de Contraloría Sanitaria","http://sacs.mpps.gob.ve/");
			links("","Hospital Cardiológico Infantil Latinoamericano Dr. Gilberto Rodríguez Ochoa","http://www.cardiologicoinfantil.gob.ve/");
			links("minci","Ministerio del Poder Popular para la Comunicación e Información","http://www.minci.gob.ve/");
			links("UCV","Universidad Central de Venezuela","http://www.ucv.ve/");
			links("","Ministerio de Ciencia, Tecnología e Innovación","http://www.mcti.gob.ve/");
			links("SENCAMER","Servicio Autónomo Nacional de Normalización, Calidad, Metrología y Reglamentos ","http://www.sencamer.gob.ve/");
			links("UBV","Universidad Bolivariana de Venezuela","http://www.ubv.edu.ve/");
		sub_site_f();
	site_fin();
	// Institutos de Investigación Nacional
	site_inicio("4","Institutos de Investigación Nacional");
		sub_site_i("Institutos de Investigación Nacional","venezuela.png");
			links("IVIC","Instituto Venezolano de Investigaciones Científicas","http://www.ivic.ve/");
			links("IDEA","Fundación Instituto de Estudios Avanzados","http://www.idea.gob.ve/");
			links("","Instituto de Medicina Experimental de la UCV","http://www.med.ucv.ve/escuelas_institutos/IME/index.html");
			links("IBE","Instituto de Biología Experimental de la UCV","http://www.med.ucv.ve/escuelas_institutos/IME/index.html");
			links("","Instituto de Investigaciones Farmacéuticas de la UCV","http://www.ucv.ve/organizacion/facultades/farmacia/organizacion/dependencias/instituto-de-investigaciones-farmaceuticas.html");
		sub_site_f();
	site_fin();
	// Institutos de Salud Nacionales e Internacionales
	site_inicio("5","Institutos de Salud Nacionales e Internacionales");
		//Argentina
		sub_site_i("Argentina","argentina.png");
			links("","Ministerio de Salud de Argentina","http://www.msal.gov.ar");
		sub_site_f();
		//Brasil
		sub_site_i("Brasil","brasil.png");
			links("","Ministerio de Salud de Brasil","http://portalsaude.saude.gov.br/portalsaude/");
		sub_site_f();
		//Belice
		sub_site_i("Belice","belice.png");
			links("","Ministerio de Salud de Belice","http://health.gov.bz/www/");
		sub_site_f();
		//Bolivia
		sub_site_i("Bolivia","bolivia.png");
			links("","Ministerio de Salud y Deportes de Bolivia","http://www.sns.gob.bo/");
		sub_site_f();
		//Canada
		sub_site_i("Canada","canada.png");
			links("","Health Canada","http://www.hc-sc.gc.ca/");
		sub_site_f();
		//Chile
		sub_site_i("Chile","chile.png");
			links("","Instituto de Salud Pública de Chile","http://www.ispch.cl/");
		sub_site_f();
		//Colombia
		sub_site_i("Colombia","colombia.png");
			links("INS","Instituto Nacional de Salud de Colombia","http://www.ins.gov.co/Paginas/inicio.aspx");
		sub_site_f();
		//Costa Rica
		sub_site_i("Costa Rica","costa_rica.png");
			links("INS","Ministerio de Salud de Costa Rica","http://www.ministeriodesalud.go.cr/");
		sub_site_f();
		//Cuba
		sub_site_i("Cuba Rica","cuba.png");
			links("","Red de Salud de Cuba","http://www.sld.cu/");
		sub_site_f();
		//Ecuador
		sub_site_i("Ecuador","ecuador.png");
			links("","Ministerio de Salud Pública de Ecuador","http://www.salud.gob.ec/");
		sub_site_f();
		//El Salvador
		sub_site_i("El Salvador","el_salvador.png");
			links("","Ministerio de Salud de El Salvador","http://www.salud.gob.sv/");
		sub_site_f();
		//Estados Unidos
		sub_site_i("Estados Unidos","estados_unidos.png");
			links("","National Institutes of Health","http://www.nih.gov/");
		sub_site_f();
		//Guatemala
		sub_site_i("Guatemala","guatemala.png");
			links("","Ministerio de Salud Pública de Guatemala","http://www.mspas.gob.gt/");
		sub_site_f();
		//Guyana
		sub_site_i("Guyana","guyana.png");
			links("","Ministry of Health","http://www.health.gov.gy/MOH/");
		sub_site_f();
		//Honduras
		sub_site_i("Honduras","honduras.png");
			links("","Secretaria de Salud de Honduras","www.salud.gob.hn");
		sub_site_f();
		//Jamaica
		sub_site_i("Jamaica","jamaica.png");
			links("","Ministerio de Salud de Jamaica","http://www.moh.gov.jm/");
		sub_site_f();
		//Mexico
		sub_site_i("Mexico","mexico.png");
			links("","Instituto Nacional de Salud Pública de Mexico","http://www.insp.mx/");
		sub_site_f();
		//Nicaragua
		sub_site_i("Nicaragua","nicaragua.png");
			links("","Ministerio de Salud de Nicaragua","http://www.minsa.gob.ni/");
		sub_site_f();
		//Panamá
		sub_site_i("Panamá","panama.png");
			links("","Ministerio de Salud República de Panamá","http://www.minsa.gob.pa/");
		sub_site_f();
		//Paraguay
		sub_site_i("Paraguay","paraguay.png");
			links("","Instituto Nacional de Salud de Paraguay","http://www.ins.gov.py/");
		sub_site_f();
		//Perú
		sub_site_i("Perú","peru.png");
			links("","Instituto Nacional de Salud de Perú","http://www.ins.gob.pe/portal");
		sub_site_f();
		//Puerto Rico
		sub_site_i("Puerto Rico","puerto_rico.png");
			links("","Departamento de Salud de Puerto Rico","http://www.salud.gov.pr/Pages/default.aspx");
		sub_site_f();
		//República Dominicana
		sub_site_i("República Dominicana","republica_dominicana.png");
			links("","Ministerio de Salud Pública de República Dominicana","http://www.salud.gob.do/");
		sub_site_f();
		//Uruguay
		sub_site_i("Uruguay","uruguay.png");
			links("","Ministerio de Salud Pública de Uruguay","http://www.msp.gub.uy/index_1.html");
		sub_site_f();
		//Venezuela
		sub_site_i("Venezuela","venezuela.png");
			links("MPPS","Ministerio del Poder Popular para la Salud","http://www.mpps.gob.ve/");
		sub_site_f();
	site_fin();
	// Otros
	site_inicio("6","Otros Sitios de Interés");
		sub_site_i("Otros Sitios de Interés","venezuela.png");
			links("AOAC","Oficial Methods of analysis","http://www.aoac.org/");
			links("ALBA","Alianza Bolivariana para los Pueblos de Nuestra América","http://www.alianzabolivariana.org/");
			links("","Codex Alimentarius","http://www.codexalimentarius.org/");
			links("IICA","Instituto Interamericano de Cooperación para la Agricultura","http://www.iica.int.ve/");
			links("FAO","Organización de las Naciones Unidas para la Agricultura y la Alimentación","http://www.fao.org/index_es.htm");
			links("FONDONORMA","Fondo para la Normalización y Certificación de la Calidad","http://www.fondonorma.org.ve/");
			links("","Food Info Net","http://www.foodinfonet.com/");
			links("ICMSF","International Commission on Microbiological Specifications for Foods","http://www.icmsf.org/");
			links("MERCOSUR","Mercado Común del Sur","http://www.mercosur.int/");
			links("OMS","Organización Mundial de la Salud","http://www.who.int/es/index.html");
			links("OPS","Organización Panamericana de la Salud","http://new.paho.org/ven/");
			links("PULSENET","Red de Subtificación para Vigilancia de Enfermedades Transmitidas por Alimentos","http://www.panalimentos.org/pulsenet/");
			links("RILAA","Red Interamericana de Laboratorios de Análisis de Alimentos","http://www.panalimentos.org/rilaa/e/index.asp");
			links("WHO","World Health Organization","http://www.who.int/en/");
			links("UNASUR","Unión de Naciones Suramericanas","http://www.unasursg.org/");
			links("","MicrobeWiki - (The student-edited microbiology resource)","http://microbewiki.kenyon.edu/index.php/MicrobeWiki");
		sub_site_f();
	site_fin();
	?>
    
    
    
    
<!--
<div id="1">
<h3 class="contenedor_1">Agencias Regulatorias y Evaluadores de Medicamentos</h3>
<div class="sites">Div1
	<h1>País</h1>
    <img src="" title="" alt="Imagen" />
    <div>Div2
    	<h2>Abreviado</h2>
        <h3>Texto</h3>
        <a href="" title="">Hipervínculo</a>
    </div>
</div>
<p class="boton_global">De conformidad con la Ley de Medicamentos y el Reglamento de la Ley del Ejercicio de la Farmacia, para obtener la autorización de expendio en todo el territorio nacional de una Especialidad Farmacéutica, se debe cumplir con los requisitos establecidos en el formulario <a href="doc/rc_doc/rc_ef/F-RCDM-023_solicitud_para_el_registro_nacional_de_productos_famaceuticos.doc" target="_blank" title="solicitud_para_el_registro_nacional_de_productos_famaceuticos"><strong>F-RCDM-023 Solicitud para el Registro Nacional de Productos Farmacéuticos</strong></a> según se indica en el <a href="doc/rc_doc/rc_ef/INSTRUCTIVO_DE_LLENADO_F-RCDM-023.pdf" target="_blank" title="Instructivo"><strong>Instructivo</strong></a> respectivo.</p>
<p class="boton_global"><strong>Pasos a seguir:</strong></p>
<ol class="numero">
<li class="numero">Para cada especialidad farmacéutica a Registrar, debe llenar el formulario F-RCDM-023 Solicitud para el Registro Nacional de Productos Farmacéuticos y presentar una copia adicional del formulario, lleno para ser sellado y firmado por el Departamento de Recepción y Coordinación de Especialidades Farmacéuticas como constancia de su recepción.</li>
<li class="numero">Preparar y separar los anexos legales, químico farmacéuticos, preclínicos y  clínicos, según la categoría de la especialidad farmacéutica. Observar que algunos de estos anexos deben ser originales legalizados o en copias compulsadas. Además, debe revisar las Normas de la Junta Revisora de Productos Farmacéuticos, a los fines de garantizar que los recaudos suministrados, cumplen con lo establecido en dichas <a href="normas_ef.php"><strong>Normas.</strong></a></li>
<li class="numero">Remitir las muestras según se indica en el Instructivo correspondiente</li>
<li class="numero">Cancelar la tarifa de Registro Sanitario de Producto Farmacéutico, según la categoría del producto, depositando en la cuenta corriente del Instituto Nacional de Higiene "Rafael Rangel", <strong>Nº 0102-0132-28000869-9691, Banco de Venezuela</strong>. El monto a cancelar dependerá de la categoría de la Especialidad Farmacéutica a Registrar, según la Gaceta Oficial de la República Bolivariana de Venezuela N° 39.819 del 13/12/2011. Considerar además, la Normativa para el Pago de los Servicios del INH”RR”, <a href="pdf/rc_pdf/P-178-2012-10-02-2012.pdf" title="Circular Nº P-178/2012 DE FECHA 10/02/2012" target="_blank"><strong>Circular Nº P-178/2012 DE FECHA 10/02/2012.</strong></a></li>
<li class="numero">Inutilizar timbres fiscales por un valor de 0,02 UT por página de formulario.</li>
<li class="numero">Una vez que disponga de todos los recaudos, solicitar una cita para entrega de la Solicitud de Registro, según se indica en el vinculo “Cita para Entrega de Solicitudes”</li>
<li class="numero">El día de la cita en la Recepción de Muestras de Especialidades Farmacéuticas  en el 1º piso del Edificio Sede del INH"RR", Ciudad Universitaria, Caracas, deberá hacer entrega del formulario, anexos, muestras, depósito del pago de la tarifa respectiva con copia, y la constancia de la solicitud de la cita donde se indica la fecha de la misma.</li>
<li class="numero">El personal de la Unidad de Recepción de Especialidades Farmacéuticas, recibirá  la solicitud presentada y emitirá la constancia de recepción respectiva, para la tramitación de la factura por el pago efectuado en la caja del INH”RR” ubicada en el 1º piso del edificio sede. </li>
<li class="numero">En un periodo de 20 días hábiles, se llevará a cabo el proceso de revisión de la solicitud y en caso de que cuente con todos los recaudos requeridos según la categoría del producto, la solicitud será admitida y se informará al Patrocinante mediante comunicación.</li>
<li class="numero">En caso que la solicitud no sea admitida, deberá ser  retirada en  la oficina de Recepción respectiva.</li>
<li class="numero">La solicitud podrá ser nuevamente presentada ante la Unidad de recepción, una vez revisada y ajustada a la normativa vigente, solicitando la cita respectiva, en el lapso del periodo de vigencia del depósito, según lo establecido en la Circular “Normativa para la Cancelación de Pagos” <a href="pdf/rc_pdf/P-178-2012-10-02-2012.pdf" title="Circular Nº P-178/2012 DE FECHA 10/02/2012" target="_blank"><strong>Circular Nº P-178/2012 DE FECHA 10/02/2012.</strong></a></li>
<p class="boton_global"><strong>OBSERVACION:</strong> El Farmacéutico Patrocinante, debe revisar todos los recaudos de la solicitud y garantizar que cumple con la Normativa vigente. La inclusión del recaudo faltante que motivo la no admisión, no asegura la admisión de la solicitud en la siguiente presentación, si se evidencia la carencia de otros recaudos o información inconsistente. </p>
<li class="numero">Una vez admitida la Solicitud de Registro Sanitario, es distribuida a los Departamentos responsables de evaluar la calidad, seguridad y eficacia del producto.</li>


</ol>
</div>
<div class="contenido_global" id="2">
hola
</div>
-->
</div>
<!-- InstanceEndEditable -->
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