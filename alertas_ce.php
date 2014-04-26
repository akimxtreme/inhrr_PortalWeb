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
<title>Gerencia Sectorial de Registro y Control - Centro Nacional de Vigilancia Farmacológica - (Alertas)</title>
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
include_once('conexion/conexion_portal.php');

function alerta($titulo,$contenido){
	switch ($titulo) {
			case 'Título' :
			echo'<h2><strong>'. $titulo .': </strong>'. $contenido .'</h2>';
			break;
			
			case 'Adjunto' :
			echo'<p><strong>'. $titulo .': </strong><a href="pdf/rc_pdf/pdf_ce/'.$contenido.'" target="_blank" title="Descargar Archivo '. $contenido .'">Descargar - '. $contenido .' &raquo;</a></p>';
			break;
			
			case 'Fecha' :
			echo'<h3><strong>'. $titulo .': </strong>'. $contenido .'</h3>';
			break;

			default:
			echo'<p><strong>'. $titulo .': </strong>'. $contenido .'</p>';
	}
	
}
echo '<div class="seccion_1">';
echo '<h1 class="contenedor_0">ALERTAS DE MEDICAMENTOS DE USO HUMANO</h1>';
echo '<br><br><p class="columns">Presione Doble Click en la Alerta de su interés:</p><br>';

	echo '<div class="estilo2">';
		$sql = "SELECT * FROM seccion_ce ";
		$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_row($seleccion)){
				$id = $row[0];
				$seccion = $row[1];
				$abrev_seccion = $row[2];
				$js = "'". $abrev_seccion . $id ."'";
		echo '<span id="titulo_'. $abrev_seccion .'" title="'. $seccion . $abrev_seccion .'" onclick="estilo2('. $js .');">'. $seccion . ' &raquo;</span>';
					
				$sql2 = "SELECT * FROM alertas_ce WHERE cod_seccion='$id' ORDER BY fecha DESC";	
				$seleccion2=mysql_query($sql2,$conexion);
				echo '<div id="'. $abrev_seccion . $id .'">';
				while ($row2 = mysql_fetch_row($seleccion2)){
					$row2[1];
					$row2[2];
					$row2[3];
					$row2[4];
					$row2[5];
					$row2[6];
					$row2[7];
					$row2[8];
					$row2[9];
				echo '<div>';
				?>
             
               
                <?php 	
				alerta('Título',$row2[6]."(".$row2[0].")");
				alerta('Sección',$seccion);
				if($row2[2]!=""){alerta('Tipo de Alerta',$row2[2]);}
				
					$sql3 = "SELECT * FROM ambito_ce WHERE id='$row2[3]'";	
					$seleccion3=mysql_query($sql3,$conexion);
					while ($row3 = mysql_fetch_row($seleccion3)){
						$row3[1];
						alerta('Ambito',$row3[1]);
					}
				
				alerta('Fecha',$row2[4]);
				alerta('Número',$row2[5]);
				alerta('Adjunto',$row2[7]);
				if($row2[8]!=""){alerta('Nº de Registro Sanitario',$row2[8]);}
				if($row2[9]!=""){alerta('Nº de Lote',$row2[9]);}
				echo '</div>';
				}
				echo '</div>';
		}mysql_close ($conexion);			
		//echo $abrev_seccion;	
		
		
		
		
		
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