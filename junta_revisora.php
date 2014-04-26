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
<title>Junta Revisora de Productos Farmacéuticos</title>
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
<link href="css/organic_2.css" rel="stylesheet" type="text/css" />
    <script src='js/jquery_2.min.js'></script>
    <script src="js/organictabs_2.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            
    
        });
    </script>
<!-- Contenido -->
<div class="seccion_4">
<h3 class="contenedor_1">JUNTA REVISORA DE PRODUCTOS FARMACÉUTICOS</h3>
<div id="page-wrap">
     
        <div id="example-one">
        			
        	<ul class="nav">
            	
                <li class="nav-uno"><a href="#uno" class="current">Boletines</a></li>
                <li class="nav-dos"><a href="#dos">Comunicaciones</a></li>
                <li class="nav-tres"><a href="#tres">Normas</a></li>
               
                <!--<li class="nav-nro"><a href="#cuatro" target="_blank">Opción n</a></li>-->
                
                
            </ul>
        	
        	<div class="list-wrap">
        	<!-- 1 Boletines -->
            <ul id="uno">
               <h2 class="contenedor_1">BOLETINES</h2>
            
                <p class="contenedor_1">Comuniquese con Nosotros a través del correo electrónico: <strong>juntarevisora@inhrr.gob.ve</strong></p>                
                               
                
                
                <ul class="vinetas">                
                  <?php
                    // Abre la Conexion con la BD
                    include_once('conexion/conexion_portal.php');
                    // Selecciona todos los boletines en estado activo de la Junta Revisora
                    $sql = "SELECT * FROM boletines_jr WHERE cod_estado=1";
		            $seleccion=mysql_query($sql,$conexion);
		            
		            //Variables:
		            $url = 'pdf/pdf_jr/'; // Ruta de todos los Boletines, Comunicaciones y Normas de la Junta Revisora
		            
		            // Muestra los datos de la consulta
		            while ($row = mysql_fetch_row($seleccion)){
                        echo '<li class="vinetas">';
                            echo '<a href="'. $url . $row[3] .'" target="_blank" title="'.$row[1].'">';                            
                                echo 'Boletín Nº: '. $row[1];
                                if($row[2]!="0000-00-00"){
                                     echo ' de Fecha: ' . $row[2];
                                }
                            echo '<b class="verde1 nuevo_menu">Descargar &raquo;</b></a>';                                
                        echo '</li>';
                    }
                    ?>                  
                </ul>
            </ul>
        	<!-- 2 Comunicaciones -->	 
        		 <ul id="dos" class="hide">
                 <h2 class="contenedor_1">COMUNICACIONES</h2>
                 <img class="global" src="imagenes/mision.png" alt="Imagen"/>
                 
                 <p class="contenedor_1">Comuniquese con Nosotros a través del correo electrónico: <strong>juntarevisora@inhrr.gob.ve</strong></p>
                 
                 <p class="contenedor_1">Para descargar una Comunicación determinada debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                 <table class="global">  
                  <tr>
                    <td class="w80 global_titulo">Titulo de la Comunicación</td>
                    <td class="w10 global_titulo">Fecha</td>
                    <td class="w10 global_titulo">Descargar</td>
                  </tr>
                  <?php
                    // Selecciona todos los boletines en estado activo de la Junta Revisora
                    $sql = "SELECT * FROM comunicaciones_jr WHERE cod_estado=1 ORDER BY fecha DESC";
		            $seleccion=mysql_query($sql,$conexion);		              
		            
		            // Muestra los datos de la consulta
		            while ($row = mysql_fetch_row($seleccion)){
                        echo '<tr>';
                            echo '<td class="w80 global azulT">'. $row[1] .'</td>';
                            // Verifica la Comunicación contiene fecha
                            if($row[2]=="0000-00-00"){
                                echo '<td class="w10 global shadow">Sin Fecha<br /><br /><br /></td>';
                            }else{
                                echo '<td class="w10 global shadow">'. $row[2] .'<br /><br /><br /></td>';
                            }
                            echo '<td class="w10 global"><a href="'. $url . $row[3] . '" target="_blank"><img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="Comunicación de la Junta Revisora"/></a></td>';                                                 
                        echo '</tr>';
                    }
                    ?>
                  </table>
  
                 </ul>                 
			<!-- 3 Junta Revisora -->        		 
       			  <ul id="tres" class="hide">
                  <!--<h2 class="contenedor_1">ACERCA DE LA JUNTA REVISORA DE PRODUCTOS FARMACÉUTICOS</h2>
                  <h3 class="contenedor_1">Misión</h3>
                  <img class="global_2" src="imagenes/jr_mision.png" alt="Misión de La Junta Revisora"/>
                  <p class="contenedor_1">Somos Asesores al Ministerio del Poder Popular para la Salud, en los aspectos relativos a la efectiva y permanente vigilancia del registro, promoción, prescripción, sustitución, dispensación, expendio, farmacovigilancia y ensayos clínicos de los medicamentos; establecer los criterios, normas y procedimientos para el otrogamiento, renovación y cancelación del Registro Sanitario y, así mismo, definir, revisar y actualizar las Normas Farmacológicas que determinan la aceptación y las condiciones de uso de los productos farmacéuticos en el país.</p>
                 <h3 class="contenedor_1">Visión</h3>
                 <img class="global_2" src="imagenes/jr_vision.png" alt="Visión de La Junta Revisora"/>
                  <p class="contenedor_1">Constituirse en una entidad autónoma de referencia nacional e internacional para la definición de políticas en materia de regulación sobre registro, control y condiciones de comercialización y uso de los medicamentos, así como para el establecimiento de normas y procedimientos sobre el particular.</p>
                 <h3 class="contenedor_1">Funciones</h3>
                 <img class="global" src="imagenes/jr_funciones.png" alt="Funciones de La Junta Revisora"/>
                  <p class="contenedor_1">La Junta Revisora de Productos Farmacéuticos tendrá las siguientes atribuciones:</p>
                  <li>Evaluar la documentación científica y analítica que sustente la aprobación de los productos farmacéuticos.</li>
                  <li>Recomendar la aprobación o suspensión de la comercialización y uso de productos farmacéuticos.</li>
                  <li>Realizar controles de los productos farmacéuticos que se comercializan en el país.</li>
                  <li>Evaluar los protocolos de investigación clínica realizados en el país.</li>
                  <li>Evaluar y autorizar las publicidades y/o promoción de los productos farmacéuticos.</li>
                  <li>Emitir los dictámenes que en materia de su competencia le sean solicitados.</li>
                  <li>Dictar Normas donde se establezcan los criterios para el otorgamiento y renovación del Registro Sanitario de Productos Farmacéuticos.</li>
                  <li>Armonizar tanto las exigencias legales, como los progresos aportados por la investigación farmacológica, biológica, galénica y química de síntesis.</li>
                  <li>Decidir sobre la clasificación de los productos farmacéuticos en: Especialidades Farmacéuticas o Biológicos.</li>
                  <li>Convocar audiencias oficiales, públicas o privadas, para la discusión de aspectos específicos o generales concernientes a la política de control de medicamentos.</li>
                  <li>Realizar las modificaciones y/o ampliaciones de las Normas de la Junta Revisora de Productos Farmacéuticos, que sean requeridas durante el proceso de registro, las cuales se basan en la experiencia adquirida en el curso de sus propias deliberaciones; así como en los documentos científicos, argumentos y sugerencias que, en forma objetiva, documentada y razonable aportan los profesionales durante el proceso de registro de sus respectivos productos.</li>
                  <li>Incluir nuevos capítulos y sub-capítulos (grupo), durante el proceso de revisión de las Normas existentes, previa publicación de las mismas en órganos de divulgación científica.</li>
                  <li>Designar asesores “ad hoc” y consultar sociedades científicas, autoridades sanitarias y profesionales de conocido prestigio, en caso de ser requeridos en el proceso de toma de decisiones.</li>
                  -->
                  </ul>
            <!-- 4 Normas -->	 
        		 <ul id="tres" class="hide">
                 <h2 class="contenedor_1">NORMAS</h2>
                 <p class="contenedor_1">Comuniquese con Nosotros a través del correo electrónico: <strong>juntarevisora@inhrr.gob.ve</strong></p>
                 <p class="contenedor_1">Para descargar una Norma determinada debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>
                 <table class="global">  
                      <tr>
                        <td class="w55 global_titulo">Norma</td>
                        <td class="w20 global_titulo">Fecha de Publicación</td>
                        <td class="w15 global_titulo">Nº de Gaceta</td>
                        <td class="w10 global_titulo">Archivo</td>
                      </tr>
                      <?php
                    // Selecciona todos los boletines en estado activo de la Junta Revisora
                    $sql = "SELECT * FROM normas_jr WHERE cod_estado=1 ORDER BY fecha DESC";
		            $seleccion=mysql_query($sql,$conexion);		              
		            
		            // Muestra los datos de la consulta
		            while ($row = mysql_fetch_row($seleccion)){
                        echo '<tr>';
                            echo '<td class="w55 global azulT">'. $row[1] .'</td>';
                            // Verifica la Comunicación contiene fecha
                            if($row[2]=="0000-00-00"){
                                echo '<td class="w20 global shadow">Sin Fecha<br /><br /><br /></td>';
                            }else{
                                echo '<td class="w20 global shadow">'. $row[2] .'<br /><br /><br /></td>';
                            }
                            // Verifica la Comunicación contiene Número de Gaceta
                            if($row[5]==""){
                                echo '<td class="w15 global shadow">Sin Fecha<br /><br /><br /></td>';
                            }else{
                                echo '<td class="w15 global shadow">'. $row[5] .'<br /><br /><br /></td>';
                            }
                            echo '<td class="w10 global"><a href="'. $url . $row[3] . '" target="_blank"><img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="Norma de la Junta Revisora"/></a></td>';                                                 
                        echo '</tr>';
                    }
                    mysql_close();
                    ?>
                </table>
                </ul>       	     		         
                 
                 
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
		
	
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