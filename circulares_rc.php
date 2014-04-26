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
<title>Gerencia Sectorial de Registro y Control - Circulares</title>
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

 
<?php 

function circular($titulo,$contenido){
	
	switch ($titulo) {
			case 'Asunto' :
			echo'<h2><strong>'. $titulo .': </strong>'. $contenido .'</h2>';
			break;
			
			case 'Adjunto' :
			echo'<p><strong>'. $titulo .': </strong><a href="pdf/rc_pdf/'.$contenido.'" target="_blank" title="Descargar Archivo '. $contenido .'">Descargar - '. $contenido .' &raquo;</a></p>';
			break;
			
			case 'Fecha' :
			echo'<h3><strong>'. $titulo .': </strong>'. $contenido .'</h3>';
			break;

			default:
			echo'<p><strong>'. $titulo .': </strong>'. $contenido .'</p>';
	}
}

function unidades($siglas){
	$unidad;
	$js_1 = "'". $siglas ."'";
	switch ($siglas) {
			
			case 'CE' :
			$unidad='CENAVIF - Centro Nacional de Vigilancia Farmacológica';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			case 'EF' :
			$unidad='Especialidades Farmacéuticas y Materiales Médicos';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			case 'PA' :
			$unidad='Productos Alimenticios';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			case 'PB' :
			$unidad='Productos Biológicos';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			case 'PC' :
			$unidad='Productos Cosméticos';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			case 'PE' :
			$unidad='Circulares Generales';
			echo '<span id="titulo_'. $unidad .'" title="'. $unidad .'" onclick="estilo2('. $js_1 .')">'. $unidad . ' &raquo;</span>';
			break;
			
			default:
			echo '';
	}
	
}

echo '<div class="seccion_1">';
echo '<h1 class="contenedor_0">CIRCULARES DEL INHRR</h1>';
echo '<br><br><br>';
	echo '<div class="estilo2">';
				include_once('conexion/conexion_portal.php');
				$sql = "SELECT tipo_circular FROM circulares_rc2 GROUP BY tipo_circular";
		        $seleccion=mysql_query($sql,$conexion);
		        // Muestra las siglas del tipo de circular (CE - EF - PA - PB - PC - PE)
		        unidades('PE');
		            // Selecciona las circulares de tipo PE
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='PE' OR ubicacion_circular LIKE '%RC%') ORDER BY fecha_creacion DESC";
                    $seleccion= @mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 250px;"  id="PE" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        unidades('EF');
		            // Selecciona las circulares de tipo EF
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='EF' OR ubicacion_circular LIKE '%EF%') ORDER BY fecha_creacion DESC";
                    $seleccion= @mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 180px;"  id="EF" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        unidades('PB');
		            // Selecciona las circulares de tipo PB
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='PB' OR ubicacion_circular LIKE '%PB%') ORDER BY fecha_creacion DESC";
                    $seleccion= @mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 180px;"  id="PB" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        unidades('CE');
		            // Selecciona las circulares de tipo CE
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='CE' OR ubicacion_circular LIKE '%CE%') ORDER BY fecha_creacion DESC";
                    $seleccion= @mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 180px;"  id="CE" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        unidades('PA');
		            // Selecciona las circulares de tipo PA
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='PA' OR ubicacion_circular LIKE '%PA%') ORDER BY fecha_creacion DESC";
                    $seleccion= @mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 180px;"  id="PA" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        unidades('PC');
		            // Selecciona las circulares de tipo PC
                    $sql = "SELECT titulo, numero,fecha_creacion, adjunto FROM circulares_rc2 WHERE cod_estado=1 AND (tipo_circular='PC' OR ubicacion_circular LIKE '%PC%') ORDER BY fecha_creacion DESC";
                    $seleccion=@mysql_query($sql,$conexion);
                        echo '<div style="overflow:scroll; height: 180px;"  id="PC" >';
                    while ($row = @mysql_fetch_row($seleccion)){
                            echo '<div>';
                                circular('Asunto',$row[0]);
                                circular('Número',$row[1]);
                                circular('Fecha',$row[2]);
                                circular('Adjunto',$row[3]);
                            echo '</div>';
                    }
                        echo '</div>';
		        mysql_close ($conexion);
	echo '</div>';	
echo '</div>';
?>
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