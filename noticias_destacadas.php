<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Noticias Destacadas</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<!-- jQuery (required) -->
	<script src="js/jquery.min.noticias.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.noticias.js"><\/script>')</script>

	<!-- Demo stuff -->
	<link rel="stylesheet" href="css/page.css">

	<!-- Anything Slider -->
	<link rel="stylesheet" href="css/anythingslider.css">
	<script src="js/jquery.anythingslider.js"></script>
	<!-- Aqui se define el tamaño de recuadro de la noticias-->
	<style>
	#slider { width: 579px; height: 380px;}
	</style>

	<!-- AnythingSlider initialization -->
	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider();
		});
	</script>
</head>

<body class="noticias_destacadas">


<!-- Simple AnythingSlider -->

	<ul id="slider">
    <?php
	function noticias($img,$titulo,$subtitulo,$parrafo1,$parrafo2,$link,$noticia,$origen,$fecha,$hora){
		echo '<!-- '. $noticia .' -->';
		echo '<li class="noticia">';
			echo '<img class="img_noticia" src="imagenes/img_noticias/' . $img . '" alt="Imagen Relacionada con la noticia' . $noticia .'">';
			echo '<span class="p_noticia">';
				echo '<h1 class="titulo_noticia">'. $titulo .'</h1>';
				echo '<h2 class="subtitulo_noticia">'. $subtitulo .'</h2>';
				echo '<p class="p_noticia">'. $parrafo1 .'</p>';
				echo '<p class="p_noticia">';
				echo $parrafo2;
				if($link!=""){
				echo '<a href="'. $link .'" target="_parent" title="'. $noticia . ': ' . $titulo .'">Ver mas...</a>';
				}
				echo '</p>';
			echo '</span>';
			echo'<span class="p_noticia_1">'. $noticia .' - '. $origen .' '. $fecha .', '. $hora .' </span>';
		echo '</li>';
		}
	noticias(
	/*Imagen 		*/"nuevo_gabinete_2013_2.png", 
	/*Título 		*/"NUEVO GABINETE MINISTERIAL",
	/*Subtítulo 	*/"",
	/*Párrafo Izq 	*/"Los ministros ratificados son: Defensa, Diego Molero; Planificación, Jorge Giordani; Comunicaciones y la Información, Ernesto Villegas; Educación, Maryann Hanson; Banca Pública, Marcos Torres; Pueblos Indígenas, Aloha Núñez; Relaciones Exteriores, Elías Jaua Milano; Petróleo y Minería, Rafael Ramírez; Transformación Revolucionaria de la Gran Caracas, Farruco Sesto; ",
	/*Párrafo Der 	*/"Despacho de la Presidencia, Carmen Meléndez; Servicios Penitenciarios, Iris Varela; Vivienda y Hábitat, Ricardo Molina; Trabajo y Seguridad Social, María Cristina Iglesias; Industrias, Ricardo Menéndez; Jefa de Gobierno del Distrito Capital, Jacqueline Faría; así como el vicepresidente Jorge Arreaza.",
	/*Hipervínculo 	*/"noticia15.php",
	/*Nro. noticia 	*/"Noticia",
	/*Origen 		*/"Gerencia de Informática",
	/*Fecha 		*/"24 de Abril del 2013",
	/*Hora 			*/"12:00 PM"
	);
	noticias(
	/*Imagen 		*/"lab_alimentos_1.png", 
	/*Título 		*/"FORTALECIMIENTO DE LOS LABORATORIOS DE ALIMENTOS DEL INH “RR”",
	/*Subtítulo 	*/"",
	/*Párrafo Izq 	*/"La Ciudadana Ministra del Poder Popular para la Salud, Dra. Eugenia Sader Castellano aprobó el proyecto del Instituto Nacional de Higiene “Rafael Rangel” relacionado con el Fortalecimiento del Laboratorio Nacional de Control de Alimentos,  otorgando  financiamiento para la adquisición de equipos de alta tecnología, tales como: Termociclador Rotor-gene para pruebas microbiológicas, HPLC masa-masa para ensayos de residuos veterinarios, residuos de plaguicidas, melanina, entre otros;",
	/*Párrafo Der 	*/"2 Sistemas de Cromatografía Liquidas para determinar micotoxinas y aminoácidos, un sistema gamma espectrométrico con detector de germanio hiperpuro para determinar isótopos radioactivos en alimentos, Lector de placas de absorbancia, luminiscencia, fluorescencia y fluorescencia polarizada para de terminación de alérgenos, micotoxinas y algunas vitaminas. ",
	/*Hipervínculo 	*/"noticia9.php",
	/*Nro. noticia 	*/"Noticia 9",
	/*Origen 		*/"Presidencia",
	/*Fecha 		*/"01 de Febrero del 2013",
	/*Hora 			*/"07:50 AM"
	);
	noticias(
	/*Imagen 		*/"agua_envasada_1.png", 
	/*Título 		*/"CALIDAD DE AGUA ENVASADA",
	/*Subtítulo 	*/"",
	/*Párrafo Izq 	*/"El Instituto Nacional de Higiene, a través de la División de Control de Alimentos adscrita a la Gerencia Sectorial de Registro y Control trabaja conjuntamente con la Contraloría Sanitaria del Ministerio del Poder Popular para la Salud, participa en la evaluación integral del agua envasada que ingresa a ésta institución con fines de obtención del Registro Sanitario, así como del Control Sanitario de la misma, con la finalidad de asegurar la calidad e inocuidad del vital líquido y contribuir con la Salud de la Población Venezolana.",
	/*Párrafo Der 	*/"Según la Norma Venezolana COVENIN Nº 1431-82 <strong>“Agua Potable Envasada. Requisitos”</strong>, es aquella apta para el consumo humano, contenida en recipientes apropiados, aprobados por la autoridad competente y con cierre hermético inviolable, el cual deberá permanecer en tal condición hasta que llegue a manos del consumidor final. Esta norma igualmente establece los requisitos organolépticos (olor, color, sabor), físico químico y microbiológico que debe cumplir el agua potable envasada.",
	/*Hipervínculo 	*/"noticia8.php",
	/*Nro. noticia 	*/"Noticia 8",
	/*Origen 		*/"Presidencia",
	/*Fecha 		*/"01 de Febrero del 2013",
	/*Hora 			*/"07:48 AM"
	);
	noticias(
	/*Imagen 		*/"siverc.png", 
	/*Título 		*/"Próxima Inauguración de SIVERC, la única taquilla de servicios vía internet del INHRR.",
	/*Subtítulo 	*/"Sistema Venezolano de Registro y Control de Medicamentos y Evaluación de Productos Sanitarios (SIVERC)",
	/*Párrafo Izq 	*/"El Sistema Venezolano de Registro y Control de Medicamentos y Evaluación de Productos Sanitarios (SIVERC) del Instituto Nacional de Higiene “Rafael Rangel” (INH ”RR”), a ser inaugurado en los próximos meses, permitirá la automatización de todos los procesos desarrollados por la Gerencia Sectorial de Registro y Control, en lo referente al registro y control sanitario de medicamentos y la evaluación de productos alimenticios, cosméticos, productos naturales y materiales médicos.",
	/*Párrafo Der 	*/"SIVERC, es un sistema  único en su tipo, diseñado de acuerdo a las  necesidades del INH ”RR”  y las exigencias de la regulación nacional e internacional. Funciona  como una ventanilla única de servicios, donde los Patrocinantes, Tramitantes, Funcionarios del Estado y Público en general, podrán realizar sus solicitudes ante la  Gerencia Sectorial de Registro y Control del INH ”RR”,  vía Internet, así como recibir el estatus de su solicitud,  los resultados o dictamen respectivo.",
	/*Hipervínculo 	*/"noticia6.php",
	/*Nro. noticia 	*/"Noticia 6",
	/*Origen 		*/"IF",
	/*Fecha 		*/"2013",
	/*Hora 			*/"08:00 AM"
	);
	
	noticias(
	/*Imagen 		*/"noticias_inhrr.png", 
	/*Título 		*/"Gerencia Sectorial de Diagnóstico y Vigilancia Epidemiológica",
	/*Subtítulo 	*/"",
	/*Párrafo Izq 	*/"<strong>Noticia 1:</strong> 100% de concordancia en los resultados de los paneles externos de proeficiencia para el diagnóstico y vigilancia  de virus Influenza, Rubéola y Sarampión, y virus Polio, lográndose la certificación de los laboratorios adscritos al Departamento de Virología por parte del Programa de Control de Calidad Externa para la detección del virus Influenza A por PCR de la Organización Mundial de la Salud (OMS) y por el CDC, Atlanta USA, respectivamente.",
	/*Párrafo Der 	*/"Una vez más, se demuestra el apego a las exigencias en la calidad laboratorial lo que se traduce en la confiabiabilidad  y confianza en los resultados diagnósticos emitidos en esta dependencia.<br><strong>Noticia 2:</strong> En el  mes de Agosto 2012, se adquirieron 2 nuevos equipos de PCR-Tiempo Real lo cual viene a fortalecer el diagnóstico molecular de enfermedades infecciosas, ofreciendo mayor cantidad de pruebas de manera rápida ",
	/*Hipervínculo 	*/"noticia0.php",
	/*Nro. noticia 	*/"Micro-Noticias",
	/*Origen 		*/"DE",
	/*Fecha 		*/"2012 - 2013",
	/*Hora 			*/"08:00 AM"
	);
	
	noticias(
	/*Imagen 		*/"noticias_inhrr.png", 
	/*Título 		*/"Diplomado de Vigilancia Sanitaria de Alimentos.",
	/*Subtítulo 	*/"Gerencia de Docencia e Investigación",
	/*Párrafo Izq 	*/"La Gerencia de Docencia e Investigación a través de la Coordinación de  Cursos de Extensión y la División de Control de Alimentos adscrita a la Gerencia Sectorial de Registro y Control, culminó con éxito la I Cohorte del Diplomado Vigilancia Sanitaria de los Alimentos, en el periodo abril-diciembre 2012, con la participación de cuarenta y un (41) profesionales provenientes del Servicio Autónomo de Contraloría Sanitaria (SACS), Instituto Nacional de Nutrición (INN), Instituto Nacional Agrícola Integral (INSAI) y el Instituto Nacional de Higiene “Rafael Rangel” y de algunas empresas alimenticias.",
	/*Párrafo Der 	*/"Cabe destacar que el diplomado contó con facilitadores procedentes del Instituto Nacional de Higiene ”Rafael Rangel”, Servicio Autónomo de Contraloría Sanitaria, Industria Alimentaria, Universidades Nacionales y el Instituto Interamericano de Cooperación para la Agricultura (IICA).",
	/*Hipervínculo 	*/"noticia5.php",
	/*Nro. noticia 	*/"Noticia 5",
	/*Origen 		*/"ID",
	/*Fecha 		*/"2013",
	/*Hora 			*/"08:00 AM"
	);
	
	
	noticias(
	/*Imagen 		*/"noticias_inhrr.png", 
	/*Título 		*/"Test de Proficiencia De Bancos De Sangre",
	/*Subtítulo 	*/"Gerencia Sectorial de Registro y Control",
	/*Párrafo Izq 	*/"El Instituto Nacional de Higiene Rafael Rangel (INH ”RR”) organiza y desarrolla con apoyo del Ministerio del Poder Popular para la Salud (MPPS) un programa de control de calidad con el propósito de evaluar el desempeño de los laboratorios de banco de sangre a nivel nacional, públicos y privados, abarcando las etapas pre-analítica, analítica y post-analítica bajo una total confidencialidad.",
	/*Párrafo Der 	*/"Este programa lleva por nombre <strong>PROGRAMA DE CONTROL DE CALIDAD EXTERNO EN SEROLOGÍA (PCCES)</strong>, el cual es responsabilidad de la Gerencia Registro y Control desde el año 2007.",
	/*Hipervínculo 	*/"noticia7.php",
	/*Nro. noticia 	*/"Noticia 7",
	/*Origen 		*/"RC",
	/*Fecha 		*/"2013",
	/*Hora 			*/"08:00 AM"
	);
			
	noticias(
	/*Imagen 		*/"noticia1.png", 
	/*Título 		*/"Eliminación de criaderos domiciliarios impide proliferación de zancudos",
	/*Subtítulo 	*/"Personal médico está calificado para atender los casos clínicos en los cuatro hospitales centinelas del sistema público estadal",
	/*Párrafo Izq 	*/"Aunque el dengue en el estado Miranda se encuentra en zona de seguridad, dentro del canal de vigilancia epidemiológica, las autoridades de 				la Dirección Estadal de Salud acentúan su plan de acción para promover la conducta preventiva por parte de las comunidades y evitar la proliferación de criaderos de larvas del zancudo Aedes Aegypti, transmisor de esta enfermedad.",
	/*Párrafo Der 	*/"En las primeras cuatro semanas de 2013, la red asistencial adscrita al despacho estadal de Salud brindó atención oportuna con personal médico calificado para reconocer los síntomas compatibles con el dengue con y sin signos de alarma, y dengue hemorrágico, ameritando este último la aplicación del protocolo de hospitalización por signos de alarma como el sangramiento.",
	/*Hipervínculo 	*/"noticia1.php",
	/*Nro. noticia 	*/"Noticia 1",
	/*Origen 		*/"Escrito por MinSalud",
	/*Fecha 		*/"Martes 05 de Febrero de 2013",
	/*Hora 			*/"21:41"
	);
	
	noticias(
	/*Imagen 		*/"noticia2.png", 
	/*Título 		*/"Programa de salud cardiovascular atendió más de 400 mil personas en el 2012",
	/*Subtítulo 	*/"La doctora Beatriz Larocca, coordinadora del programa, informó que esta población fue atendida y dotada con los medicamentos esenciales para los problemas propios de su condición",
	/*Párrafo Izq 	*/"Durante el pasado año 2012, el Programa Nacional de Salud Cardiovascular que impulsa el Ministerio del Poder Popular para la Salud (MPPS), atendió a más de 400 mil personas en todo el país, fortaleciendo la promoción de estilos de vida saludables a fin de prevenir enfermedades cardiovasculares y minimizar los factores de riesgo en la población sana.",
	/*Párrafo Der 	*/"La doctora Beatriz Larocca, coordinadora del programa cardiovascular, informó que esta población fue atendida y dotada con los medicamentos esenciales para los problemas cardiovasculares, gracias al convenio Cuba- Venezuela y el Servicio de Elaboraciones Farmacéuticas (SEFAR), ente adscrito al MPPS.",
	/*Hipervínculo 	*/"noticia2.php",
	/*Nro. noticia 	*/"Noticia 2",
	/*Origen 		*/"MinSalud",
	/*Fecha 		*/"Jueves, 31 de Enero de 2013 ",
	/*Hora 			*/"20:06 AM"
	);
	
	noticias(
	/*Imagen 		*/"noticia3.png", 
	/*Título 		*/"Contraloría Sanitaria y comité de salud fiscalizarán expendios de alimentos",
	/*Subtítulo 	*/"En 2012, el ente contralor estadal brindó 34.533 servicios, para beneficio de más de dos millones de mirandinos",
	/*Párrafo Izq 	*/"Personal de la coordinación estadal del Servicio Autónomo de Contraloría Sanitaria (SACS), articulado con el Dispositivo de Seguridad Bicentenario y los comité de salud profundizarán las inspecciones para garantizar el cumplimiento de las normas de funcionamiento e higiene de establecimientos en el estado Miranda, dentro del plan de optimización de servicios en beneficio de la preservación de la salud del pueblo. ",
	/*Párrafo Der 	*/"Diógenes Morales, coordinador del SACS Miranda, informó que su despacho continuará en los carnavales y durante todo el año la fiscalización de calle con la Guardia Nacional Bolivariana, el Indepabis (Instituto para la Defensa de las Personas en el Acceso a los Bienes y Servicios) y la Policía Nacional Bolivariana para evaluar la observancia de las normas.",
	/*Hipervínculo 	*/"noticia3.php",
	/*Nro. noticia 	*/"Noticia 3",
	/*Origen 		*/"MinSalud/ Prensa Web RNV",
	/*Fecha 		*/"Martes, 22 de Enero de 2013",
	/*Hora 			*/"20:14 AM"
	);
	
	noticias(
	/*Imagen 		*/"noticia4.png", 
	/*Título 		*/"Contraloría Sanitaria participa en el Operativo Carnaval 2013",
	/*Subtítulo 	*/"",
	/*Párrafo Izq 	*/"Caracas, 05.02.13 (Prensa MPPS).- Como antesala a las fiestas carnestolendas, el Servicio Autónomo de Contraloría Sanitaria (SACS) del Ministerio del Poder Popular para la Salud (MPPS) realizó este martes unas visitas de inspección a los establecimientos que expenden alimentos y bebidas en el Terminal La Bandera, para dar inicio al operativo Carnaval 2013; así lo informó Divis Antúnez, director general del SACS.",
	/*Párrafo Der 	*/"Destacó que el objetivo es verificar que los comercios posean sus permisos sanitarios vigentes y que las condiciones higiénicas sanitarias del lugar sean las más adecuadas para el expendio de alimentos y bebidas, dentro del terminal terrestre.",
	/*Hipervínculo 	*/"noticia4.php",
	/*Nro. noticia 	*/"Noticia 4",
	/*Origen 		*/"MPPS",
	/*Fecha 		*/"05 Febrero 2013",
	/*Hora 			*/"17:04 PM"
	);
	?>
	
	</ul>

	<!-- END AnythingSlider -->

</body>
</html>