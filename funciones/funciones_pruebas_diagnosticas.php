<?php
/*
	Fecha: 16-08-2012*
	Autor: Ing. Domingo Ilarreta
	Correo: akimxtreme.dj@gmail.com

/*
Todas las funciones en PHP

 */

/* GLosario */

function consulta_rapida($tabla){
			include ('conexion/conexion_pruebas_diagnosticas.php');
			$primer_caracter =  substr($tabla, 0, 1);
			$restante =  substr($tabla, 1, 15);
			// Selecciona de la tabla seccion los items disponibles   
				////////
				if($tabla=="agente"){
						$sql="SELECT * FROM $tabla ORDER BY agente";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["agente"];
						$campo_2=$row["cod_agente"];
						echo '<option class="formulario" value="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
				}
				if($tabla=="tecnica"){
						$sql="SELECT * FROM $tabla ORDER BY tecnica";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["tecnica"];
						$campo_2=$row["id"];
						echo '<option class="formulario" value="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
				}
				if($tabla=="tipo_prueba"){
						$sql="SELECT * FROM $tabla ORDER BY  tipo_prueba";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["tipo_prueba"];
						$campo_2=$row["id"];
						echo '<option class="formulario" value="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
				}
				if($tabla=="tipo_muestra_transporte"){
						$sql="SELECT * FROM $tabla ORDER BY tipo_muestra_transporte";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["tipo_muestra_transporte"];
						$campo_2=$row["id"];
						echo '<option class="formulario" value="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
				}
				if($tabla=="temperatura"){
						$sql="SELECT * FROM $tabla ORDER BY temperatura";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["temperatura"];
						$campo_2=$row["id"];
						echo '<option class="formulario" value="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
				}
}

function glosario (){
	include ('conexion/conexion_pruebas_diagnosticas.php');
						$sql="SELECT * FROM glosario";
						$seleccion=mysql_query($sql,$conexion);
						echo '<div class="global_buscar">';
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["glosario"];
						echo '<p class="global_buscar" onclick="'. $campo_1 .'">'. $campo_1 .'</p>';
						
						}
						echo'<form class="global_buscar" name="" id="glosario_buscar" action="" 	onsubmit="" method="">
<input class="global_buscar" type="text" name="" id="" onblur="" value="Indique..." />
<button class="global_buscar" type="submit" name="" id="" value="">Buscar</button>
</form>';
						echo '</div>';
	}

// <><><><>  Funtcion Global Para el Formulario de INICIO <><><><><><><><><><><><><><><><><><><><><><>
function formulario_inicio($titulo, $css,$name_id,$action,$method,$onsubmit,$enctype,$id_fieldset,$title_fieldset,$id_legend){
	/* formulario 10 variables:
			1)  $titulo = Titulo del Formulario   --- Ej: Ingreso al Sistema ---
			2)  $css = Clase de los Estilos CSS para las etiquetas <form>, <fieldset> y <legend>  --- Ej: formularios ---
			3)  $name_id = nombre y id para la etiqueta <form> 	--- Ej: formulario_de_ingreso ---
			4)  $action = Acción que se le da al Formulario  --- Ej: acciones.php
			5)  $method = Indica el Tipo de metodo que tendra el formulario  --- Ej: GET  ó  POST ---
			6)  $onsubmit = Para asignar la función de Validación en el Lenguaje de Eventos "Javascript"  --- Ej: validacion(this); no Hace falta color return ya que está agregado en la función. ---
			7)  $enctype = Se llena siempre y cuando el formulario cuenta con etiquetas de tipo <file> "Adjuntar Archivos"  --- Ej: multipart/form-data ---
			8)  $id_fieldset = Para asignar propiedades CSS únicas a la etiqueta <fieldset>  --- Ej: fielset_estilos ---
			9)  $tittle_fieldset = Para mostrar a traves del atributo título una frase  --- Ej: Formulario para registro de usuarios ---
			10) $id_legend = Para asignar propiedades CSS únicas a la etiqueta <fieldset>  --- Ej: legend_estilos ---
			
	*/
echo '<form class="'. $css .'" id="'. $name_id .'" name="'. $name_id .'" action="'. $action .'" method="'. $method .'" onsubmit="return '. $onsubmit .'" enctype="'. $enctype .'">';
echo '<fieldset class="'. $css .'" id="'. $id_fieldset .'" title="'. $title_fieldset .'">';
echo '<legend class="'. $css .'" id="'. $id_legend .'" title="'. $titulo .'">'. $titulo .'</legend>';
}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

// <><><><>  Function Global Para el Formulario de CIERRE <><><><><><><><><><><><><><><><><><><><><><><><><><><><>
function formulario_cierre (){
	//echo'<h3 class="campo_obligatorio"><strong class="campo_obligatorio">*</strong>Campo Obligatorio</h3>';
	echo '</fieldset>';
	echo '</form>';
	}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>



// <><><><>  Function Global BOTONES .. Etiquetas <button> <><><><><><><><><><><><><><><><><><><><><><><><><><><><>
function boton($titulo,$css,$name_id,$value,$disabled,$id_div){
	/* Etiqueta input type="TEXT" 6 variables:
			1)  $titulo = Titulo del campo en la Etiqueta <label>   --- Ej: Enviar ---
			2)  $css = Clase de los Estilos CSS para las etiquetas <div>, <label> e <input>  --- Ej: formulario ---
			3)  $name_id = nombre y id para la etiqueta <input> 	--- Ej: enviar ---
			4)  $value = Para asignar el Valor del campo  --- Ejemplos: " " , "envia" ó $envia (muestra una consulta de la BD) ---
			5)  $disabled = Atributo para desactivar el campo  --- Ej: disabled ---
			6)  $id_div = Para asignar propiedades CSS únicas a la etiqueta <div>  --- Ej: div_estilos ---
	*/
echo '<div class="'. $css .'" id="'. $id_div .'">';
echo '<button class="'. $css .'" name="'. $name_id .'" id="'. $name_id .'" value="'. $value .'" type="submit" title="'. $titulo .'"'; if ($disabled!=""){echo ' disabled="disabled"';} echo'>'. $titulo .'</button>';
echo '</div>';
	}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

function select ($titulo,$css,$name_id,$onchange,$disabled,$bd_contenido_tabla,$id_div,$id_label){
	$js_name_id="'".$name_id."'";
	if ($titulo!=""){echo '<div class="'. $css .'" id="'. $id_div .'">';}
	if ($titulo!=""){echo '<label class="'. $css .'" id="'. $id_label .'" title="">'. $titulo .':</label>';}
	echo '<select class="'. $css .'" name="'. $name_id .'" id="'. $name_id .'" onchange="obligatorio('.$js_name_id.');'. $onchange .'"'; if ($disabled!=""){echo ' disabled="disabled"';} echo '>';
	echo '<option class="formulario" value="Seleccione...">Seleccione...</option>';
	if($bd_contenido_tabla!=""){consulta_rapida($bd_contenido_tabla);}
	echo '</select>';
	if ($titulo!=""){echo '<strong class="obligatorio">*</strong>';}
	if ($titulo!=""){echo '</div>';}
}

		
?>