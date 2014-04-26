<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Noticias Destacadas</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
</head>

<body style="background:#FFFFFF;">
<!--Noticias -->

<link rel="stylesheet" href="noticias/css/slidorion.css" />
<div id="slidorion" class="slidorion azulClaro">
	<div class="title">
    	<h1>Noticias de Interés</h1>
        
    </div>

		<div class="slider">
			<div class="slide"><img style="width:100%; height:100%;" src="noticias/img/noticia23.png" /></div>
			<div class="slide"><img src="noticias/img/noticia21.png" /></div>
			<div class="slide"><img src="noticias/img/noticia22.png" /></div>
            
		</div>

		<div class="accordion">
			<div class="header">Inauguración Módulo Productos Registrados de Especialidades Farmacéuticas y Productos Bilógicos</div>
			<div class="content">
				<p>A partir del 15 de noviembre de 2013, el Representante de la Especialidad Farmacéutica o Producto Biológico Registrado en el país, deberá proceder a cargar los datos del producto en el Modulo habilitado de SIVERC, siguiendo las instrucciones señaladas en los Manuales para Ingreso de Especialidades Farmacéuticas o Productos Biológicos Registrados</p>
				<p>Previamente, la Casa de Representación deberá registrarse en SIVERC, para obtener el acceso oficial al sistema, según se indica en el Manual para Registro de la Casa de Representación de la Especialidad Farmacéutica o Producto Biológico Registrado. <a href="noticia23.php" title="Noticia: SIVERC" target="_parent"> Ver mas &raquo;</a></p>
                
			</div>
			<div class="header">Alternativa Gratuita contra el Cáncer &raquo;</div>
			<div class="content">
				<p>Autoridades del Instituto Venezolano de los Seguros Sociales (IVSS) y del Ministerio para la Salud inspeccionaron este martes los avances y proyecciones del complejo hematoncológico y de radiocirugía más grande del país como una de las mejores alternativas gratuitas en el continente para los pacientes con cáncer.</p>
				<p>Desde las instalaciones del hospital Domingo Luciani, en El Llanito, Caracas, el recorrido fue dirigido por el presidente del IVSS, Carlos Rotondaro, quien explicó que es el único centro en el continente que brinda sin costo alguno para el paciente un sistema de calidad para aplicar tratamientos de quimioterapia, radioterapia y radiocirugía con tecnología de última generación.<a href="noticia21.php" title="Noticia: Venezuela brinda alternativa gratuita en la región para tratamiento por cáncer" target="_parent"> Ver mas &raquo;</a></p>
            </div>
			<div class="header">Yaracuy: Marcapaso DAI Gratis &raquo;</div>
			<div class="content">
				<p>El Gobierno de Yaracuy de la mano con la Fundación Pueblo Sano, continúa innovando en la colocación de marcapasos para los pacientes, no sólo del estado sino de cualquier parte del país, en función de dignificar al pueblo en materia de salud.</p>
				<p>Durante el fin de semana fue intervenido quirúrgicamente un paciente del municipio Peña, donde se le implantó por parte de la Fundación Pueblo Sano el primer marcapaso Desfibrilador Automático Implantable (DAI) totalmente gratis. <a href="noticia22.php" title="Noticia: Pueblo Sano implantó primer marcapaso DAI en Yaracuy completamente gratis" target="_parent"> Ver mas &raquo;</a></p>
			</div>
		</div>
        <a class="link azulClaro" href="noticias.php" target="_parent" title="Noticias del INHRR">TODAS LAS NOTICIAS &raquo;</a>
	</div>
 
	<script src="noticias/dist/jquery.min.js"></script>
	<script src="noticias/js/jquery.easing.js"></script>
    <script src="noticias/dist/jquery.slidorion.min.js"></script>

    <script>
	
	$(function(){
		$('#slidorion').slidorion({
			effect: 'slideRandom',
			hoverPause: true,
			interval: 20000,
			speed: 800,
			controlNav: false,
			controlNavClass: 'nav'
		});
	});
	</script>

</body>
</html>