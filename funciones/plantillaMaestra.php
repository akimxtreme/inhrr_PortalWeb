<?php
/*
Función doctype: Muestra en pantalla el Minilogo, los Estilos CSS y funciones en Javascript Globales
*/
function linkGlobal(){
	echo '<!-- Minilogo Institucional -->';
	echo '<link rel="icon" href="imagenes/minilogo.png"/>';
	echo '<!-- CSS Global Estilos CSS Globales -->';
	echo '<link id="tamano"  href="css/global.css" rel="stylesheet" type="text/css" />';
	echo '<!-- Javascript Hoja Global Javascript -->';
	echo '<script language="javascript" type="text/javascript" src="js/funciones.js"></script>';
	}
// Función tamanioLetra: Muestra la maquetación del Tamaño de Letra
function tamanioLetra(){
	echo '<!-- Tamanio de Letra -->';
	echo '<div class="sizeLetra">';
    	echo '<a href="#" title="Disminuye, Aumenta y Normaliza el tamaño de texto">Tamaño de Letra</a>';
        echo '<a class="sizeT min" href="javascript:ts'; echo "('body',-1)"; echo '" title="Disminuye el tamaño de texto">-</a>';
        echo '<a class="sizeT max" href="javascript:ts'; echo "('body',1)";  echo '" title="Aumenta el tamaño de texto">+</a>';
        echo '<a class="sizeT nor" href="" title="Normaliza el tamaño de texto">Normal</a>';
        echo '<a class="lenguaje" href="#" onclick="lenguaje();" title="Select Languaje">Select Languaje  &raquo;</a>';
	echo '</div>';
	
	}
// Función banner: Muestra el banner Institucional 
function cintilloGobierno(){
	echo '<!-- Imagen representativa del Gobierno Bolivariano -->';
		echo '<div class="gobBolivariano">';
			echo '<img src="imagenes/Cintillo.png" alt="Imagen representativa del Gobierno Bolivariano" title="Imagen representativa del Gobierno Bolivariano"/>';
		echo '</div>';
	}
// Función encabezado_MenuBanner: Muestra el Banner Institucional y el Menu que se encuentra dentro del banner
function encabezado_MenuBanner(){
	echo '<!-- Encabezado -->';
	echo '<div class="encabezado">';
    	echo '<!-- Imagen Banner del Instituto Nacional de Higiene Rafael Rangel -->';
    	echo '<img src="imagenes/banner.png" alt="Banner del Instituto Nacional de Higiene Rafael Rangel" title="Banner del Instituto Nacional de Higiene Rafael Rangel"/>';
    echo '<!-- menuBanner -->';
        echo '<div class="menuBanner">';
            echo '<a href="mantenimiento.php" title="Intranet del Instituto Nacional de Higiene Rafael Rangel">Intranet</a>';
            echo '<a href="https://mail.inhrr.gob.ve" title="Correo Institucional del Instituto Nacional de Higiene Rafael Rangel" target="_blank">Correo Institucional</a>';
            echo '<a href="mapa_del_sitio.php" title="Mapa del Sitio">Mapa del Sitio</a>';
            echo '<a href="atencion_al_ciudadano.php" title="Espacio dedicado para la Atención del Ciudadano">Atención al Ciudadano</a>';
            echo '<a href="cv.php" title="Envianos tu Sintesis curricular, Observa Nuestras Vacantes">Bolsa de Empleo</a>';
            echo '<a href="contacto.php" class="noBorder" title="Medios de Contacto">Contáctenos</a>';
        echo '</div>';
	echo '</div>';
	
	// Traductor de Google
	/*
	<div class="google_translate_element" id="google_translate_element"></div><script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, multilanguagePage: true}, 'google_translate_element');
    }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	*/
	}
function metaGoogle(){
	echo '<meta name="google-translate-customization" content="43bc643c7d157a30-c6530a15f74be822-gbb26fa60e42410fc-19"></meta>';
	}
// Funcion menuSuperior: Muestra el Menu Superior del Portal Web
function menuSuperior(){
	echo '<!-- menuSuperior -->';
	echo '<div class="menuSuperior blanco">';
        echo '<a  href="index.php" title="Nuestra página principal">Principal</a>';
        echo '<a  href="nuestro_instituto.php" title="Conoce el Instituto">Nuestro Instituto</a>';
        echo '<!--
        <a  href="#" title="Creaciones y Desarrrollos">LOGROS CIENTÍFICOS</a>
        -->';
        echo '<a  href="actividades_extension.php" title="Actividades de Extensión para los Rangelianos">Actividades de Extensión</a>';
        echo '<a  href="auditoria_interna.php" title="Espacio de la Auditoria Interna">Auditoria Interna</a>';
        echo '<a  href="comision_contrataciones.php" title="Comisión de Contrataciones">Comisión de Contrataciones</a>';
        echo '<a  href="junta_revisora.php" title="Junta revisora">Junta Revisora</a>';
        //echo '<!--<a  href="sociedad_cientifica.php" title="Sociedad Científica">Sociedad Científica</a>-->';
        echo '<a  href="sociedad_cientifica.php" title="Sociedad Científica">Sociedad Científica</a>';
	echo '</div>';	
	}
// Funcion menuPrincipal: Muestra el Menu Principal del Portal Web
function menuPrincipal(){
	
echo '<!-- menu_2 -->';
echo '<div class="menu_2 azul" id="menu">';
    echo '<ul>';
        echo '<!--Registro y Control-->';
        echo '<li class="nivel1"><a href="#" class="nivel1">Registro y Control &raquo;</a>';
            echo '<ul class="nivel2" id="nivel2_rc">';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Acerca de la Gerencia »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_rc.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_rc.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="productos_evaluados_rc.php">Productos Evaluados</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_rc.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="basamento_legal_rc.php">Basamento Legal</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_rc.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="contactanos_rc.php">Contáctanos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="quejas_rc.php">Quejas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="discusion_normativas_rc.php">Discusión de Normativas <b class="verde nuevo_menu">NUEVO</b></a></li>';
                        echo '<li class="menu2"><a class="menu3" href="reconsideracion_dictamen_rc.php">Reconsideración a Dictamen</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="sces_rc.php">Sistema de Citas para Entrega de Solicitudes</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="circulares_rc.php">Circulares <b class="verde nuevo_menu">NUEVO</b></a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">CENAVIF »</a>';
                    echo '<ul class="nivel3" id="menu_ce">';
                        echo '<li class="menu2"><a class="menu5" href="antecedentes_ce.php">Antecedentes</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="objetivo_ce.php">Objetivo</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="organigrama_ce.php">Organigrama Funcional</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="funciones_ce.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="normas_ce.php">Normas y Bases Legales</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="definiciones_ce.php">Definiciones</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="notificacion_reaccion_adversa_ce.php">Notificación de Reacción Adversa de Medicamento</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="clasificacion_reaccion_adversa_ce.php">Clasificación de las Reacciones Adversas a Medicamentos</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="proceso_reaccion_adversa_ce.php">Proceso de Reacciones Adversas a Medicamentos hacia Uppsala Monitoring Centre. OMS - UMC</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="notificacion_problemas_observados_ce.php">Notificación de problemas observados en medicamentos</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="como_notificar_problema_medicamento_ce.php">¿Cómo notificar un posible problema de calidad en un medicamento?</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="como_notificar_eficacia_medicamento_ce.php">¿Cómo notificar una falta de eficacia del medicamento?</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="sistema_nacional_farmacovigilancia_ce.php">Sistema Nacional de Farmacovigilancia</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="alertas_ce.php">Alertas</a></li>';
                        echo '<!--<li class="menu2"><a class="menu5" href="circulares_ce.php">Circulares a la Industria Farmacéutica</a></li>-->';
                        echo '<li class="menu2"><a class="menu5" href="circulares_rc.php">Circulares a la Industria Farmacéutica</a></li>';
                        echo '<!--<li class="menu2"><a class="menu5" href="normativa_industria_ce.php">Normativa para la industria: Reporte de Reacciones Adversas</a></li>-->';
                        echo '<!-- <li class="menu2"><a class="menu5" href="mantenimiento.php">Normativa para la industria: Reporte de Reacciones Adversas</a></li>-->';
                        echo '<li class="menu2"><a class="menu5" href="audiencias_ce.php">Audiencias y Consultas</a></li>';
                        echo '<li class="menu2"><a class="menu5" href="atencion_ciudadano_ce.php">Atención al Ciudadano</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Productos Alimenticios »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="definiciones_pa.php">Definiciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="normativa_pa.php">Normativa</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="solicitud_evaluacion_integral_pa.php">Solicitud de Evaluación Integral de Alimentos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="acreditacion_pa.php">Acreditación de Tramitantes</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="repeticion_ensayo_pa.php">Repetición de Ensayo de Alimentos y Bebidas Alcohólicas  Nacionales e Importados</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="recaudos_pa.php">Recaudos requeridos según la solicitud</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="entrega_resultados_pa.php">Entrega de resultados</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="modificacion_informes_pa.php">Modificación de informes</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="control_sanitario_pa.php">Control Sanitario de Alimentos y Bebidas Alcohólicas Nacionales ó Importadas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="aspectos_pa.php">Aspectos a considerar relativos al alimento y envase</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="ensayos_especiales_pa.php">Ensayos Especiales</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="audiencias_pa.php">Audiencia Estatus y Consultas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="solicitudes_pa.php">Solicitud de Copias Simples, Copias Certificadas y Certificados de Exportación</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="enfermedades_pa.php">Enfermedades Transmitidas por Alimentos (Eta)</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="redes_pa.php">Redes</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Especialidades Farmacéuticas y Materiales Médicos »</a>';
                    echo '<ul class="nivel3" id="menu_ef">';
                        echo '<li class="menu2"><a class="menu4" href="farmaceutico_ef.php">Farmacéutico Patrocinante y Adjunto</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="registro_sanitario_ef.php">Registro Sanitario</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="bio_ef.php">Biodisponibilidad y Bioequivalencia</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="normas_ef.php">Normas</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="audiencia_consultas_estatus_ef.php">Audiencia Consultas y Estatus</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="primer_lote_ef.php">Control del primer (1er) Lote de Comercialización</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="control_programado_ef.php">Control Programado</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="renovacion_registro_ef.php">Renovación del Registro Sanitario</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="cambios_post_registro_ef.php">Cambios Post-registro</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="materiales_medicos_ef.php">Evaluación de Materiales Médicos</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="protocolos_clinicos_ef.php">Autorización de Protocolos Clínicos</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="reacciones_adversas_ef.php">Reporte de Reacciones Adversas y Fallas de Calidad de Especialidades Farmacéuticas</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Productos Biológicos »</a>';
                    echo '<ul class="nivel3" id="menu_pb">';
                        echo '<li class="menu2"><a class="menu3" href="farmaceutico_pb.php">Farmacéutico Patrocinante y Adjunto</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="registro_sanitario_pb.php">Registro Sanitario</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="normas_pb.php">Normas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="audiencia_consultas_estatus_pb.php">Audiencias Consultas y Estatus</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="primer_lote_pb.php">Control de Primeros Lotes de Comercialización</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="liberacion_lote_pb.php">Liberación Lote a Lote</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="control_programado_pb.php">Control Programado</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="renovacion_registro_pb.php">Renovación de Registro Sanitario</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="cambios_post_registro_pb.php">Cambios Post-registro</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="productos_tecnologia_medica_pb.php">Evaluación de productos de Tecnologia Medica de Origen Biológico</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="kits_biologicos_pb.php">Evaluación de Kits Biológicos para Diagnóstico</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="fallas_cadena_frio_pb.php">Evaluación de Fallas en la Cadena de Frío de Productos Biológicos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="protocolos_clinicos_pb.php">Autorización de Protocolos Clínicos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="reacciones_adversas_pb.php">Reporte de Reacciones Adversas y Fallas de Calidad de Productos Biológicos</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Productos Cosméticos »</a>';
                    echo '<ul class="nivel3" id="menu_pc">';
                    	echo '<li class="menu2"><a class="menu3" href="farmaceutico_pc.php">Farmacéutico Patrocinante y Adjunto</a></li>';
                    	echo '<li class="menu2"><a class="menu3" href="tramites_evaluacion_integral_pc.php">Trámites de Evaluación Integral con Fines de Registro Sanitario</a></li>';
						echo '<li class="menu2"><a class="menu3" href="incorporaciones_cosmeticos_pc.php">Incorporaciones en Cosméticos</a></li>';
						echo '<li class="menu2"><a class="menu3" href="reformulacion_cosmeticos_pc.php">Reformulación en Cosméticos (Cambio de Fórmula)</a></li>';
						echo '<li class="menu2"><a class="menu3" href="post_notificacion_pc.php">Trámites para cambios Post-Notificación de Productos Cosméticos</a></li>';
						echo '<li class="menu2"><a class="menu3" href="renovacion_cosmeticos_pc.php">Evaluación Integral para Renovación de Cosméticos</a></li>';
						echo '<li class="menu2"><a class="menu3" href="tramites_evaluacion_integral_vigilancia_pc.php">Trámites para  Evaluación Integral con fines de Vigilancia</a></li>';
						echo '<li class="menu2"><a class="menu3" href="emision_resultados_pc.php">Emisión de Resultados</a></li>';
						echo '<li class="menu2"><a class="menu3" href="control_sanitario_pc.php">Control Sanitario de Productos Cosméticos</a></li>';
						echo '<li class="menu2"><a class="menu3" href="normas_pc.php">Normas</a></li>';
						echo '<li class="menu2"><a class="menu3" href="productos_uso_topico_pc.php">Productos Repelentes de Insectos de Uso Tópico</a></li>';
						echo '<li class="menu2"><a class="menu3" href="audiencias_pc.php">Audiencias</a></li>';
						echo '<li class="menu2"><a class="menu3" href="denuncias_consultas_pc.php">Denuncias y Consultas del Público en General</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Productos Naturales »</a>';
                    echo '<ul class="nivel3" id="menu_pn">';
                        echo '<li class="menu2"><a class="menu3" href="definiciones_pn.php">Definiciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="farmaceutico_pn.php">Farmacéutico Patrocinante y Adjunto</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="solicitud_evaluacion_integral_pn.php">Solicitud de Evaluación Integral</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="audiencias_pn.php">Audiencias</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="solicitud_estatus_pn.php">Solicitud de Estatus</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="consultas_pn.php">Consultas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="renovacion_registro_sanitario_pn.php">Renovación del Registro Sanitario de Productos Naturales</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="programa_control_pn.php">Programa de Control</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="denuncias_reportes_pn.php">Denuncias y Reportes de Falla de Calidad</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="reporte_reacciones_adversas_pn.php">Reporte de Reacciones Adversas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="normas_pn.php">Normas</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="tabaco_derivados.php">Tabaco y Derivados</a></li>';
            echo '</ul>';
    echo '</li>';
        echo '<!--Docencia e Investigación-->';
        echo '<li class="nivel1"><a href="#" class="nivel1">Docencia e Investigación  &raquo;</a>';
            echo '<ul class="nivel2" id="nivel2_id">';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Acerca de la Gerencia »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_id.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_id.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_id.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="circulares_rc.php">Circulares <b class="verde nuevo_menu">NUEVO</b></a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Programa Docente »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="cursos_extension_id.php">Cursos de Extensión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="diplomados_id.php">Diplomados</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="postgrados_id.php">Postgrados</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="pasantias_id.php">Pasantías</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Programa de Investigación »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="programa_investigacion_id.php">Acerca de Nosotros</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="lineas_investigacion_id.php">Líneas de Investigación</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="proyectos_id.php">Proyectos</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="biblioteca_id.php">Dpto de Información y Divulgación Científica (Biblioteca)</a></li>';
                echo '<li class="menu"><a class="nivel2" href="cooperacion_tecnica_id.php">Cooperación Técnica</a></li>';
            echo '</ul>';
        echo '</li>';
        echo '<!--Diagnóstico y Vigilancia Epidemiológica-->';
        echo '<li class="nivel1"><a href="#" class="nivel1">Diagnóstico y Vigilancia Epidemiológica  &raquo;</a>';
            echo '<ul class="nivel2" id="nivel2_de">';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Acerca de la Gerencia »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_de.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_de.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_de.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_de.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="circulares_rc.php">Circulares <b class="verde nuevo_menu">NUEVO</b></a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Unidad de Atención al Paciente »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="atencion_paciente.php" title="Información al Público en General">Información al Público en General</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="examenes_de.php" title="Todos los Exámenes de Laboratorio">Todos los Exámenes de Laboratorio</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="examenes_de_ba.php" title="Exámenes de Bacteriología">Exámenes de Bacteriología</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="examenes_de_mi.php" title="Exámenes de Micología">Exámenes de Micología</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="examenes_de_vi.php" title="Exámenes de Virología">Exámenes de Virología</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="pdf/pdf_de/inst_tuberculosis_esputo.pdf" target="_blank" title="Instrucciones para la Toma de Muestra de Esputo para el Diagnóstico de la Tuberculosis">Instrucciones para la Toma de Muestra de Esputo para el Diagnóstico de la Tuberculosis <b class="verde nuevo_menu">NUEVO</b></a></li>';
                        echo '<li class="menu2"><a class="menu3" href="pdf/pdf_de/inst_tuberculosis_orina.pdf" target="_blank" title="Instrucciones para la Toma de Muestra de orina para el Diagnóstico de Tuberculosis">Instrucciones para la Toma de Muestra de orina para el Diagnóstico de Tuberculosis <b class="verde nuevo_menu">NUEVO</b></a></li>';
                    echo '</ul>';
                echo '</li>';                
                echo '<li class="menu" class="nivel2"><a class="nivel2" href="#">Servicios »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="servicios_de.php">Servicios Diagnósticos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_otros_de.php">Otros Servicios</a></li>';
                    echo '</ul>';
                echo '</li>';
            echo '</ul>';
        echo '</li>	';
        echo '<!--Producción-->';
        echo '<li class="nivel1"><a href="#" class="nivel1">Producción  &raquo;</a>';
            echo '<ul class="nivel2" id="nivel2_gp">';
                echo '<li class="menu"><a class="nivel2" href="#">Acerca de la Gerencia »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_gp.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_gp.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="fortalezas_gp.php">Fortalezas</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_gp.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_gp.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="productos_gp.php">Productos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_gp.php">Servicios</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="circulares_rc.php">Circulares <b class="verde nuevo_menu">NUEVO</b></a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">Planta Productora de Vacunas »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_ppv_gp.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_ppv_gp.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_ppv_gp.php">Bienes y Servicios</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="produccion_ppv_gp.php">Capacidades de Producción</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="equipamiento_ppv_gp.php">Equipamiento</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="recurso_humano_ppv_gp.php">Recurso Humano</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="formacion_recurso_ppv_gp.php">Formación del Recurso Humano</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="galeria_ppv_gp.php">Galeria de Imágenes</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">División de Producción de Vacunas Bacterianas »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_vb.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_vb.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_vb.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_vb.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_vb.php">Productos y Servicios</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="proyectos_vb.php">Proyectos en Desarrollo</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">División de Producción de Vacunas Virales »</a>';
                    echo '<ul class="nivel3" id="menu_vv">';
                        echo '<li class="menu2"><a class="menu4" href="mision_vv.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="vision_vv.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="funciones_vv.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="organigrama_vv.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="servicios_vv.php">Productos y Servicios</a></li>';
                        echo '<li class="menu2"><a class="menu4" href="asesorias_vv.php">Asesorías</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">División de Producción de Medios y Reactivos »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_mr.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_mr.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_mr.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_mr.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_mr.php">Productos y Servicios</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="asesorias_mr.php">Asesorías</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="dpto_mc.php">Departamento de Medios y Reactivos</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="dpto_cc.php">Departamento de Cultivo Celular</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">División de Servicios Técnicos Auxiliares »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_st.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_st.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_st.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_st.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="asesorias_st.php">Asesorías</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="dpto_le.php">Departamento de Lavado y Esterilización</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="dpto_pt.php">Departamento de Patología</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="dpto_bc.php">Departamento de Bioterio</a></li>';
                        echo '<!--<li class="menu2"><a class="menu3" href="granja_torcaz_st.php">Granja Experimental “La Torcaz”</a></li>-->';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="menu"><a class="nivel2" href="#">División de Control Interno de Calidad de Biológicos »</a>';
                    echo '<ul class="nivel3">';
                        echo '<li class="menu2"><a class="menu3" href="mision_ci.php">Misión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="vision_ci.php">Visión</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="funciones_ci.php">Funciones</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="organigrama_ci.php">Organigrama</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="asesorias_ci.php">Asesorías</a></li>';
                        echo '<li class="menu2"><a class="menu3" href="servicios_ci.php">Productos y Servicios</a></li>';
                    echo '</ul>';
                echo '</li>';
            echo '</ul>';
        echo '</li>';
    echo '</ul>';
echo '</div>';
	}

// Funcion piePagina: Muestra el Pie de Página del Portal Web
function piePagina(){
	echo '<!-- Pie Portal Web -->';
	echo '<div class="pie azul">';
        echo '<p>Ciudad Universitaria UCV, Los Chaguaramos, Caracas - República Bolivariana de Venezuela. Cod. 1041.</p>';
        echo '<p>Teléfonos (0058-0212) 219-1654 / 219-1622 RIF G-20000101-1 </p>';
	echo '</div>';
	}
// Funcion slideShow: Muestra la Galeria de Imagenes del Portal Web.
function  slideShow(){
	echo '<!-- Galeria de Imagenes -->';
 	echo '<!-- Stylesheets -->';
    echo '<link rel="stylesheet" type="text/css" href="presentationCycle/css/presentationCycle.css" />';
    echo '<!-- Scripts -->';
   	echo '<script type="text/javascript" src="presentationCycle/js/jquery1.3.2.min.js"></script>';
  	echo '<script type="text/javascript" src="presentationCycle/js/jquery1.10.2.min.js"></script>';
    echo '<script type="text/javascript" src="presentationCycle/js/jquery.cycle.all.min.js"></script>';
    echo '<script type="text/javascript" src="presentationCycle/js/presentationCycle.js"></script>';
	echo '<div id="presentation_container" class="pc_container">';
          
		  echo '<div class="pc_item">';
          	echo '<div class="desc">';
                  	echo '<h1>14 de Julio, Muerte del Generalísimo Francisco de Miranda</h1>';
                    echo '<p>
                    Sebastián Francisco de Miranda Rodríguez, considerado como precursor de la emancipación americana del Imperio español; conocido como «El Primer Venezolano Universal», «El Americano más Universal», fue el creador de la idea de Colombia como nación y combatiente destacado en tres continentes: África, Europa y América.</p>';
            echo '</div>';
            echo '<img src="presentationCycle/images/natalicio_fm.png" alt="14 de Julio, Muerte del Generalísimo Francisco de Miranda" />';
          echo '</div>';
		  
          echo '<div class="pc_item">';
          	echo '<div class="desc">';
                  echo '<h1>Día Mundial de la Salud</h1>';
                  echo '<p>El Día Mundial de la Salud se celebra el 7 de abril para conmemorar el aniversario de la creación de la Organización Mundial de la Salud en 1948. Cada año se elige para esa día un tema que pone de relieve una esfera de interés prioritario para la salud pública mundial. <a href="noticia17.php" title="Noticia: Día Mundial de la Salud">Ver mas &raquo;</a></p>';
            echo '</div>';
            echo '<img src="presentationCycle/images/oms.png" alt="Día Mundial de la Salud" />';
          echo '</div>';
		  
          echo '<div class="pc_item">';
          	echo '<div class="desc">';
            	echo '<h1>25 de Abril Natalicio de Rafael Rangel</h1>';
                echo '<p>
                    Nació el 25 de Abril de 1877 en Betijoque (Edo. Trujillo) y murió el 20 de Agosto de 1909, en Caracas. Rafael Rangel fue un científico e investigador que se dedicó al estudio de la enfermedades tropicales. Se le Recono principalmente por ser el 1ero en describir en Venezuela el Necátor americanus.<a href="noticia16.php" title="25 de Abril Natalicio de Rafael Rangel">Ver mas &raquo;</a></p>';
            echo '</div>';
            echo '<img src="presentationCycle/images/rafaelRangel.png" alt="25 de Abril Natalicio de Rafael Rangel" />';
          	echo '</div>';
	echo '</div>';
	
	echo '<script type="text/javascript">';
    	echo 'presentationCycle.init();';
    echo '</script>';
	}
// Función oficinaVirtual: Muestra la Oficina Virtual del Portal Web
function oficinaVirtual(){
	echo '<div class="oficVirtual azulClaro">
    
        <span class="azulClaroDos">&laquo;
        	<div class="blanco">
            	 <h1 class="azulClaro">Oficina Virtual</h1>
                 <span class="azulClaroDos">
                 	<img src="imagenes/citas.png"/>
                 	<h1>Sistema de Citas para Entrega de Solicitudes</h1>
                    <p>Procedimiento para obtener una Cita.</p>
                    <a class="azulClaro" href="sces_rc.php">INGRESAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/atencion_al _paciente.png"/>
                 	<h1>Reporte de Reacciones Adversas a Medicamentos</h1>
                    <p>Informanos sobre la ineficacia de un medicamento determinado o posibles reacciones.</p>
                    <a class="azulClaro" href="https://190.202.114.148/inhrr/inicio.php" target="_blank">INGRESAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/circulares_rc.png"/>
                 	<h1>Circulares Generales del INHRR</h1>
                    <p>Consulta las Circulares de todas las Divisiones de las Gerencias</p>
                    <a class="azulClaro" href="circulares_rc.php">CONSULTAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/alimentos.png"/>
                 	<h1>Consulta de Resultados de Alimentos</h1>
                    <p>Verifica si un Informe de Resultado de Análisis de Alimentos está culminado o no.</p>
                    <a class="azulClaro" href="pa_consulta_res_alimentos.php">CONSULTAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/Geringa.png"/>
                 	<h1>Alertas de Medicamentos de Uso Humano</h1>
                    <p>Consulta las Alertas de Calidad, Seguridad y Medicamentos Ilícitos </p>
                    <a class="azulClaro" href="alertas_ce.php">CONSULTAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/medicamentos.png"/>
                 	<h1>Sistema de Informacion de Medicamentos</h1>
                    <p>Consulta de Especialidades Farmacéuticas, Lotes de Vacunas y Hemoderivados Aprobados y Productos Biológicos.</p>
            		<span class="azulClaro">MOSTRAR ACCESOS &raquo;
                    	<div class="blanco">
                        <a class="azulClaro" href="ef_aprobadas.php">Especialidades Farmacéuticas Aprobadas en Venezuela &raquo;</a>
                        <a class="azulClaro" href="ef_canceladas.php">Especialidades Farmacéuticas Canceladas en Venezuela &raquo;</a>
                        <a class="azulClaro" href="lotes_aprobados.php">Lotes de Vacunas y Hemoderivados Aprobados en Venezuela &raquo;</a>
                        <a class="azulClaro" href="pb_aprobados.php">Productos Biológicos Aprobados en Venezuela &raquo;</a>
                        <a class="azulClaro" href="pb_cancelados.php">Productos Biológicos Cancelados en Venezuela &raquo;</a>
                        </div>
                    </span>
                   
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/control_estudios.png"/>
                 	<h1>Control de Estudios y Postgrado</h1>
                    <p>Consulta de Especialidades Farmacéuticas, Lotes de Vacunas y Hemoderivados Aprobados y Productos Biológicos.</p>
            		<span class="azulClaro">MOSTRAR ACCESOS &raquo;
                    	<div class="blanco">
                        <a class="azulClaro" href="registrarse_id.php">Registrarse &raquo;</a>
                        <a class="azulClaro" href="preinscribirse_id.php">Preinscribirse &raquo;</a>
                        <a class="azulClaro" href="inscribirse_id.php">Inscribirse &raquo;</a>
                        </div>
                    </span>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/protocolos_clinicos.png"/>
                 	<h1>Protocolos Clínicos de Especialidades Farmacéuticas</h1>
                    <p>Protocolos Clínicos de Especialidades Farmacéuticas</p>
                    <a class="azulClaro" href="ef_protocolos_clinicos.php">INGRESAR &raquo;</a>
                 </span>
                 
                 <span class="azulClaroDos">
                 	<img src="imagenes/mini_siverc.png"/>
                 	<h1>SIVERC</h1>
                    <p>Sistema Venezolano de Registro y Control de Medicamentos y Evaluación de Productos Sanitarios</p>
                    <a class="azulClaro" href="http://190.9.130.8/siverc/vus" target="_blank">INGRESAR &raquo;</a>
                 </span>
            </div>
        </span>
        <h1>Oficina Virtual</h1>
    </div>
	';
	}
// Función productoServicio: Muestra los Productos y Servicios del Portal Web
function productoServicio(){
	echo '<div class="seccion_4">';
		echo '<h1 class="contenedor_0">PRODUCTOS Y SERVICIOS</h1>';
    	echo '<ul class="seccion">';
        	echo '<li class="seccion_00"><img class="seccion" src="imagenes/empresas.png"/><p class="seccion">Industria (Patrocinantes, Tramitantes, entre otros...)</p></li>';
            echo '<ul class="seccion_01" id="industria">';
                echo '<!--<li class="seccion_01"><a class="seccion" href="industria.php" target="_parent" title="Información para la Industria">Información para la Industria</a></li>-->';
            	echo '<li class="seccion_01"><a class="seccion" href="#" title="Centro Nacional de Vigilancia Farmacológica">Centro Nacional de Vigilancia Farmacológica &raquo;</a>';	
                	echo '<ul class="seccion_02">';
                    	echo '<li class="seccion_02"><a class="seccion_02" href="antecedentes_ce.php">Antecedentes</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="objetivo_ce.php">Objetivo</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="organigrama_ce.php">Organigrama Funcional</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="funciones_ce.php">Funciones</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="normas_ce.php">Normas y Bases Legales</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="definiciones_ce.php">Definiciones</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="notificacion_reaccion_adversa_ce.php">Notificación de Reacción Adversa de Medicamento</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="clasificacion_reaccion_adversa_ce.php">Clasificación de las Reacciones Adversas a Medicamentos</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="proceso_reaccion_adversa_ce.php">Proceso de Reacciones Adversas a Medicamentos hacia Uppsala Monitoring Centre. OMS - UMC</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="notificacion_problemas_observados_ce.php">Notificación de problemas observados en medicamentos</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="como_notificar_problema_medicamento_ce.php">¿Cómo notificar un posible problema de calidad en un medicamento?</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="como_notificar_eficacia_medicamento_ce.php">¿Cómo notificar una falta de eficacia del medicamento?</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="sistema_nacional_farmacovigilancia_ce.php">Sistema Nacional de Farmacovigilancia</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="alertas_ce.php">Alertas</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="circulares_ce.php">Circulares a la Industria Farmacéutica</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="normativa_industria_ce.php">Normativa para la industria: Reporte de Reacciones Adversas</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="audiencias_ce.php">Audiencias y Consultas</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="atencion_ciudadano_ce.php">Atención al Ciudadano</a></li>';
                    echo '</ul>';
                echo '</li>';
                echo '<li class="seccion_01"><a class="seccion" href="#" title="Productos Alimenticios">Productos Alimenticios &raquo;</a>';
                	echo '<ul class="seccion_02">';
                        echo '<li class="seccion_02"><a class="seccion_02" href="definiciones_pa.php">Definiciones</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="normativa_pa.php">Normativa</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="solicitud_evaluacion_integral_pa.php">Solicitud de Evaluación Integral de Alimentos</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="acreditacion_pa.php">Acreditación de Tramitantes</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="repeticion_ensayo_pa.php">Repetición de Ensayo de Alimentos y Bebidas Alcohólicas  Nacionales e Importados</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="recaudos_pa.php">Recaudos requeridos según la solicitud</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="entrega_resultados_pa.php">Entrega de resultados</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="modificacion_informes_pa.php">Modificación de informes</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="control_sanitario_pa.php">Control Sanitario de Alimentos y Bebidas Alcohólicas Nacionales ó Importadas</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="aspectos_pa.php">Aspectos a considerar relativos al alimento y envase</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="ensayos_especiales_pa.php">Ensayos Especiales</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="audiencias_pa.php">Audiencia Estatus y Consultas</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="solicitudes_pa.php">Solicitud de Copias Simples, Copias Certificadas y Certificados de Exportación</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="enfermedades_pa.php">Enfermedades Transmitidas por Alimentos (Eta)</a></li>';
                        echo '<li class="seccion_02"><a class="seccion_02" href="redes_pa.php">Redes</a></li>';
                     echo '</ul>';
                echo '</li>';
                echo '<li class="seccion_01"><a class="seccion" href="#" title="Especialidades Farmacéuticas y Materiales Médicos">Especialidades Farmacéuticas y Materiales Médicos &raquo;</a>
                	<ul class="seccion_02">
                        <li class="seccion_02"><a class="seccion_02" href="farmaceutico_ef.php">Farmacéutico Patrocinante y Adjunto</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="registro_sanitario_ef.php">Registro Sanitario</a></li>
                        <!--<li class="seccion_02"><a class="seccion_02" href="bio_ef.php">Biodisponibilidad y Bioequivalencia</a></li>-->
                        <li class="seccion_02"><a class="seccion_02" href="normas_ef.php">Normas</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="audiencia_consultas_estatus_ef.php">Audiencia Consultas y Estatus</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="primer_lote_ef.php">Control del primer (1er) Lote de Comercialización</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="control_programado_ef.php">Control Programado</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="renovacion_registro_ef.php">Renovación del Registro Sanitario</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="cambios_post_registro_ef.php">Cambios Post-registro</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="materiales_medicos_ef.php">Evaluación de Materiales Médicos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="protocolos_clinicos_ef.php">Autorización de Protocolos Clínicos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="reacciones_adversas_ef.php">Reporte de Reacciones Adversas y Fallas de Calidad de Especialidades Farmacéuticas</a></li>
                    </ul>
                </li>
                <li class="seccion_01"><a class="seccion" href="#" title="Productos Biológicos">Productos Biológicos &raquo;</a>
                	<ul class="seccion_02">
                        <li class="seccion_02"><a class="seccion_02" href="farmaceutico_pb.php">Farmacéutico Patrocinante y Adjunto</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="registro_sanitario_pb.php">Registro Sanitario</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="normas_pb.php">Normas</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="audiencia_consultas_estatus_pb.php">Audiencias Consultas y Estatus</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="primer_lote_pb.php">Control de Primeros Lotes de Comercialización</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="liberacion_lote_pb.php">Liberación Lote a Lote</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="control_programado_pb.php">Control Programado</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="renovacion_registro_pb.php">Renovación de Registro Sanitario</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="cambios_post_registro_pb.php">Cambios Post-registro</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="productos_tecnologia_medica_pb.php">Evaluación de productos de Tecnologia Medica de Origen Biológico</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="kits_biologicos_pb.php">Evaluación de Kits Biológicos para Diagnóstico</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="fallas_cadena_frio_pb.php">Evaluación de Fallas en la Cadena de Frío de Productos Biológicos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="protocolos_clinicos_pb.php">Autorización de Protocolos Clínicos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="reacciones_adversas_pb.php">Reporte de Reacciones Adversas y Fallas de Calidad de Productos Biológicos</a></li>
                    </ul>
                </li>
                <li class="seccion_01"><a class="seccion" href="#" title="Productos Cosméticos">Productos Cosméticos &raquo;</a>
                	<ul class="seccion_02">
                        <li class="seccion_02"><a class="seccion_02" href="farmaceutico_pc.php">Farmacéutico Patrocinante y Adjunto</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="tramites_evaluacion_integral_pc.php">Trámites de Evaluación Integral con Fines de Registro Sanitario</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="incorporaciones_cosmeticos_pc.php">Incorporaciones en Cosméticos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="reformulacion_cosmeticos_pc.php">Reformulación en Cosméticos (Cambio de Fórmula)</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="post_notificacion_pc.php">Trámites para cambios Post-Notificación de Productos Cosméticos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="renovacion_cosmeticos_pc.php">Evaluación Integral para Renovación de Cosméticos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="tramites_evaluacion_integral_vigilancia_pc.php">Trámites para  Evaluación Integral con fines de Vigilancia</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="emision_resultados_pc.php">Emisión de Resultados</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="control_sanitario_pc.php">Control Sanitario de Productos Cosméticos</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="normas_pc.php">Normas</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="productos_uso_topico_pc.php">Productos Repelentes de Insectos de Uso Tópico</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="audiencias_pc.php">Audiencias</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="denuncias_consultas_pc.php">Denuncias y Consultas del Público en General</a></li>
                    </ul>
                </li>
                <li class="seccion_01"><a class="seccion" href="#" title="Productos Naturales">Productos Naturales &raquo;</a>
                	<ul class="seccion_02">
                        <li class="seccion_02"><a class="seccion_02" href="definiciones_pn.php">Definiciones</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="farmaceutico_pn.php">Farmacéutico Patrocinante y Adjunto</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="solicitud_evaluacion_integral_pn.php">Solicitud de Evaluación Integral</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="audiencias_pn.php">Audiencias</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="solicitud_estatus_pn.php">Solicitud de Estatus</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="consultas_pn.php">Consultas</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="renovacion_registro_sanitario_pn.php">Renovación del Registro Sanitario de Productos Naturales</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="programa_control_pn.php">Programa de Control</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="denuncias_reportes_pn.php">Denuncias y Reportes de Falla de Calidad</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="reporte_reacciones_adversas_pn.php">Reporte de Reacciones Adversas</a></li>
                        <li class="seccion_02"><a class="seccion_02" href="normas_pn.php">Normas</a></li>
                    </ul>
                </li>
            </ul>
            
            
       </ul>
 <!--Boton: Atencion al Publico General" -->
	
	<ul class="seccion" >
    <li class="seccion_00"><img class="seccion" src="imagenes/atencion_al_publico.png"/><p class="seccion">Atención al Público en General</p></li>
    	<ul class="seccion_01">
            <li class="seccion_01"><a class="seccion" href="examenes_de_ba.php" target="_parent" title="Exámenes de Bacteriología">Exámenes de Bacteriología</a></li>
            <li class="seccion_01"><a class="seccion" href="examenes_de_mi.php" target="_parent" title="Exámenes de Micología">Exámenes de Micología</a></li>
            <li class="seccion_01"><a class="seccion" href="examenes_de_vi.php" target="_parent" title="Exámenes de Virología">Exámenes de Virología</a></li>
            <li class="seccion_01"><a class="seccion" href="examenes_de.php" target="_parent" title="Exámenes de Laboratorio">Exámenes de Laboratorio</a></li>
        </ul>
    </ul>

   

   
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/estudiantes.png"/><p class="seccion">Estudios: (Postgrados, Diplomados, Cursos, Pasantías)</p></li>
    	<ul class="seccion_01">
        	<li class="seccion_01"><a class="seccion" href="cursos_extension_id.php" target="_parent" title="Cursos de Extensión">Cursos de Extensión</a></li>
            <!--<li class="seccion_01"><a class="seccion" href="diplomados_id.php" target="_parent" title="Diplomados">Diplomados</a></li>-->
            <li class="seccion_01"><a class="seccion" href="pasantias_id.php" target="_parent" title="Pasantías">Pasantías</a></li>
        	<li class="seccion_01"><a class="seccion" href="postgrados_micologia_medica_id.php" target="_parent" title="Postgrado: Especialización en Micología Médica">Postgrado: Especialización en Micología Médica</a></li>
            <li class="seccion_01"><a class="seccion" href="postgrados_vigilancia_sanitaria_id.php" target="_parent" title="Postgrado: Especialización en Vigilancia Sanitaria">Postgrado: Especialización en Vigilancia Sanitaria</a></li>
        </ul>
        
        
   </ul>
   

   
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/profesionales.png"/><p class="seccion">Profesionales: (Biólogos, Farmecéuticos, Químicos, Médicos, entre otros...)</p></li>
    	<ul class="seccion_01">
         	<li class="seccion_01"><a class="seccion" href="profesionales.php" target="_parent" title="Información para Profesionales">Información para Profesionales</a></li>
    	</ul>
        
        
   </ul>
   
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/gaceta.png"/><p class="seccion">Régimen Tarifario Vigente</p></li>
    	<ul class="seccion_01">
         	<li class="seccion_01"><a class="seccion" href="doc/gaceta_40106.pdf" target="_blank" title="Gaceta Oficial">Gaceta Oficial</a></li>
            <li class="seccion_01"><a class="seccion" href="pdf/rc_pdf/PE-N-064-2014.jpg" target="_blank" title="Normatica para el Pago de Servicios">Normativa para el Pago de Servicios</a></li>
    	</ul>
        
        
   </ul>
   
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/uso_saludable_med.png"/><p class="seccion">Uso racional y saludable de medicamentos (Información)</p></li>
    	<ul class="seccion_01">
         	<!--<li class="seccion_01"><a class="seccion" href="tema3.php" title="Enfermedades y Afecciones">Enfermedades y Afecciones</a></li>-->
                        <li class="seccion_01"><a class="seccion" href="tema1.php" target="_blank" title="¿Qué son los Medicamentos?">¿Qué son los Medicamentos?</a></li>
    	</ul>
   </ul>
   
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/Geringa.png"/><p class="seccion">Alertas de Medicamentos de Uso Humano</p></li>
    	<ul class="seccion_01">
         	<li class="seccion_01"><a class="seccion" href="alertas_ce.php" title="Alerta de Medicamentos de Uso Humano">Alertas de Medicamentos de Uso Humano</a></li>
    	</ul>
   </ul>
   <ul class="seccion" >
   <li class="seccion_00"><img class="seccion" src="imagenes/medicamentos.png"/><p class="seccion">Sistema de Informacion de Medicamentos</p></li>
    	<ul class="seccion_01" id="sist_medicamentos">
         	<li class="seccion_01"><a class="seccion" href="ef_aprobadas.php" title="Especialidades Farmacéuticas Aprobadas en Venezuela">Especialidades Farmacéuticas <strong class="verde">Aprobadas</strong> en Venezuela</a></li>
            <li class="seccion_01"><a class="seccion" href="ef_canceladas.php" title="Especialidades Farmacéuticas Canceladas en Venezuela">Especialidades Farmacéuticas <strong class="rojo">Canceladas</strong> en Venezuela</a></li>
            <li class="seccion_01"><a class="seccion" href="lotes_aprobados.php" title="Lotes de Vacunas y Hemoderivados Aprobados en Venezuela">Lotes de Vacunas y Hemoderivados Aprobados en Venezuela</a></li>
            <li class="seccion_01"><a class="seccion" href="pb_aprobados.php" title="Productos Biológicos Aprobados en Venezuela">Productos Biológicos <strong class="verde">Aprobados</strong> en Venezuela</a></li>
            <li class="seccion_01"><a class="seccion" href="pb_cancelados.php" title="Productos Biológicos Cancelados en Venezuela">Productos Biológicos <strong class="rojo">Cancelados</strong> en Venezuela</a></li>
    	</ul>
   </ul>
   
 
	</ul>
   
 </div>
</div> ';
}
?>