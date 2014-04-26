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
<title>Acerca de la Gerencia Sectorial de Registro y Control</title>
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

<!------------------------------------------------- INICIO CONTENIDO ---------------------------------------------------------------->


	<link rel="stylesheet" href="../css/estilos_gerencias.css">
	<script src='../js/jquery.min.gerencias.js'></script>
    <script src='../js/organictabs.jquery.js'></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 300
            });
    
        });
    </script>
   

	
    <div id="page-wrap">
    
	

	<h1 class="titulo_gerencia"><!-- TemplateBeginEditable name="titulo" -->Coloque en Nombre de Sección<!-- TemplateEndEditable --></h1>
	
	<div id="example-one">
        			
        	<ul class="nav">
            <!-- TemplateBeginEditable name="menu_gerencias	" -->
                <li class="nav-one"><a href="#featured" class="current">Menu 1</a></li>
                <li class="nav-two"><a href="#core">Menu 2</a></li>
                <li class="nav-three"><a href="#jquerytuts">Menu 3</a></li>
                <li class="nav-four "><a href="#classics">Menu 4</a></li>
                <li class="nav-cinco last"><a href="#cinco">Menu 5</a></li>
                <!-- TemplateEndEditable -->	
            </ul>
        
  <div class="links_gerencias">
            <a class="links_gerencias"><img class="links_gerencias" src="../imagenes/rc_img/circulares_unidades_dependientes.png" /></a>
            <a class="links_gerencias"></a>
            <a class="links_gerencias"></a>
            <a class="links_gerencias"></a>
            <a class="links_gerencias"></a>
            </div>
           
        	
            
            
            
            
            <div class="list-wrap">
        	<!-- TemplateBeginEditable name="contenido_menu_gerencias" --> 	
        		<ul id="featured">
                <div class="gerencia">
        			<li class="gerencia">
                    <p class="gerencia">Somos el Centro de Referencia Nacional que certifica la calidad integral de los productos de uso y consumo humano a fin de garantizar el cumplimiento de la normativa sanitaria vigente para proteger la salud de la población venezolana. Dispone de profesionales, técnicos y obreros altamente calificados, responsables, con valores éticos y principios de confidencialidad, que utilizan metodologías y tecnologías actualizadas y realizan investigación aplicada.</p>
                    <img class="gerencia" src="../imagenes/rc_img/1mision_rc.png" />
                   </li>
                   
                   </div>
    		    </ul>
        		 
        		 <ul id="core" class="hide">
                   <div class="gerencia">
        			<li class="gerencia">
                    <img class="gerencia" src="" />
                    <p class="gerencia">Ser Centro de Referencia Internacional para la evaluación de la calidad integral de los productos de uso y consumo humano, certificado y acreditado por organismos internacionales, con recurso humano especializado, a fin de proteger la salud de la población.</p>
                   </li>
                   </div>
                 
        		 </ul>
        		 
        		 <ul id="jquerytuts" class="hide">
                 <div class="gerencia">
        		    <li><a href="http://css-tricks.com/anythingslider-jquery-plugin/">Anything Slider jQuery Plugin</a></li>
        		    <li><a href="http://css-tricks.com/moving-boxes/">Moving Boxes</a></li>
        			<li><a href="http://css-tricks.com/simple-jquery-dropdowns/">Simple jQuery Dropdowns</a></li>
        		</div>
        		 </ul>
        		 
        		 <ul id="classics" class="hide">
                  <div class="gerencia">
                    <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                </div>
        		 </ul>
        		 
                  <ul id="cinco" class="hide">
                   <div class="gerencia">
                    <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                     <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                </div>
        		 </ul>
        		 <!-- TemplateEndEditable -->	 
        	 </div> <!-- END List Wrap -->
             </div>
  </div>
         
        
	
		 
	
<!------------------------------------------------- FIN CONTENIDO --------------------------------------------------------------->

<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>