<?php
/*
Consulta Ajax
*/
include_once('conexion_mapa.php');
function div_inicio($js,$estado){
	
	echo '<div 
			class="seccion_1" 
			id="cerrar_datos_estado" 
			style="
				background:#FFFFFF; 
				font-size:12px; 
				z-index:50;
				margin:220px 0px 0px 20px; 
				padding:10px; 
				width:850px; 
				position:absolute; 
				opacity: 1.0; 
				border: #666 solid 2px;  
				box-shadow: 3px 3px 5px #666;
				visibility: visible;
								
			">';
	echo '<p 
			onclick="cerrar_datos_estado('.$js.');" 
			style="
				background: red; 
				padding: 3px; 
				margin: 1px 2px 1px 690px; 
				float:right; 
				border-radius: 5px; 
				box-shadow: 0px 0px 3px #333;
				border: red solid 1px; 
				font-size:10px; 
				font-weight:bold; 
				text-decoration:none; 
				color:#FFFFFF;
			">CERRAR</p>';
	echo '<h3 
			class="contenedor_1" 
			style=" font-weight:bold;
				font-size:12px;
			" >';
			echo $estado;
	echo '</h3>';
	}
function div_fin($direccion,$pruebas,$telefono,$telefono2,$correo,$responsable){
			echo '<div class="mapa_lab" style=" height:160px; background: #FFF; margin: 0.5%; width:49%; float:left; box-shadow: 0px 0px 3px #333;">'; 
			echo '<h2 class="contenedor_0" style=" font-weight:bold; font-size:11px; margin:1px;">';
			echo 'Dirección:';
			echo '</h2>';
			echo '<p class="boton_global" style="color:#000000; font-size:11px; margin:1px; padding:0px;">';
			echo $direccion;
			echo '</p>';

			echo '<h2 class="contenedor_0" style=" font-weight:bold; font-size:11px; margin:1px;">';
			echo 'Pruebas que se realizan:';
			echo '</h2>';
			echo '<p class="boton_global" style="color:#000000; font-size:11px; margin:1px; padding:0px;">';
			echo $pruebas;
			echo '</p>';


			echo '<h2 class="contenedor_0" style=" font-weight:bold; font-size:11px; margin:1px;">';
			echo 'Telefonos:';
			echo '</h2>';
			echo '<p class="boton_global" style="color:#000000; font-size:11px; margin:1px; padding:0px;">';
			echo $telefono;
			if($telefono2!=''){
			echo " / ";
			echo $telefono2;
			}
			echo '</p>';

			echo '<h2 class="contenedor_0" style=" font-weight:bold; font-size:11px; margin:1px;">';
			echo 'Correo Electrónico:';
			echo '</h2>';
			echo '<p class="boton_global" style="color:#000000; font-size:11px; margin:1px; padding:0px;">';
			echo $correo;
			echo '</p>';

			echo '<h2 class="contenedor_0" style=" font-weight:bold; font-size:11px; margin:1px;">';
			echo 'Responsable del Laboratorio:';
			echo '</h2>';
			echo '<p class="boton_global" style="color:#000000; font-size:11px; margin:1px; padding:0px;">';
			echo $responsable;
			echo '</p>';

			echo '</div>';
			
	}

$cod_js="'cerrar_datos_estado'";
$cod = $_GET['cod'];

switch ($cod){
	case "INHRR":
	div_inicio($cod_js,'SELECCIONE EL ESTADO DE SU INTERES');
		
	break;
	case "":
	div_inicio($cod_js,'SELECCIONE EL ESTADO DE SU INTERES');
	break;
	default:

		
	$sql = "SELECT estado FROM estado WHERE codestado = '$cod'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_row($seleccion)){
			$estado = $row[0];
			
		}//mysql_close ($conexion);
	div_inicio($cod_js,$estado);
	
	
	$sql = "SELECT responsable, pruebas, direccion, telefono, telefono2, correo FROM lab_salud_publica WHERE codestado = '$cod'";
	$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_row($seleccion)){
			$responsable=$row[0]; 	$responsable= ucwords(strtolower($responsable));
			$pruebas=$row[1];		$pruebas= ucwords(strtolower($pruebas));
			$direccion=$row[2];		$direccion= ucwords(strtolower($direccion));
			$telefono=$row[3];
			$telefono2=$row[4];
			$correo=$row[5];
			div_fin($direccion,$pruebas,$telefono,$telefono2,$correo,$responsable);
		}
	mysql_close();
	
	echo '</div>';

}

?>