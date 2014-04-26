<?php
/* Menu para el administrador 0 y 2

	Módulos: 
		1) Alerta de Medicamentos de Uso Humano
		2) Usuario
		3) Log
*/
function menu_modulos(){

echo '<div class="contenedor_0">
<h1 class="formulario">Sistema de Alerta de Medicamentos de Uso Humano</h1>
<div class="formulario_menu">
	<ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Alertas de Medicamentos de Uso Humano
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="agregar_alerta_ce.php" title="Agregar Alerta ó Médicamento ilícito">Agregar Alerta ó Médicamento ilícito</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="modificar_alerta_ce.php" title="Modificar Alerta ó Médicamento ilícito">Modificar Alerta ó Médicamento ilícito</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="eliminar_alerta_ce.php" title="Eliminar Alerta ó Médicamento ilícito">Eliminar Alerta ó Médicamento ilícito</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="consultar_alerta_ce.php" title="Consultar Alerta ó Médicamento ilícito">Consultar Alerta ó Médicamento ilícito</a></li>
        </ul>
    </li>
    
    </ul>
    <ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Usuarios
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="agregar_usuario_ce.php" title="Agregar Usuario">Agregar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="modificar_usuario_ce.php" title="Modificar Usuario">Modificar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="eliminar_usuario_ce.php" title="Eliminar Usuario">Eliminar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="consultar_usuario_ce.php" title="Consultar Usuario">Consultar Usuario</a></li>
        </ul>
    </li>
    
    </ul>
    <ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Log
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="log_ce.php" title="Consultar Historial de Acciones">Consultar Historial de Acciones</a></li>
        </ul>
    </li>
    
    </ul>
</div>';
}

/* Menu para el administrador 1

	Módulos: 
		1) Usuario
		2) Log
*/
function menu_modulo_1(){

echo '<div class="contenedor_0">
<h1 class="formulario">Sistema de Alerta de Medicamentos de Uso Humano</h1>
<div class="formulario_menu">
	<ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Usuarios
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="agregar_usuario_ce.php" title="Agregar Usuario">Agregar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="modificar_usuario_ce.php" title="Modificar Usuario">Modificar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="eliminar_usuario_ce.php" title="Eliminar Usuario">Eliminar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="consultar_usuario_ce.php" title="Consultar Usuario">Consultar Usuario</a></li>
        </ul>
    </li>
    
    </ul>
    <ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Log
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="log_ce.php" title="Consultar Historial de Acciones">Consultar Historial de Acciones</a></li>
        </ul>
    </li>
    
    </ul>
</div>';
}
// Menu: Módulos para usuarios con privilegios 3 y 4
function menu_modulo_3_4(){

echo '<div class="contenedor_0">
<h1 class="formulario">Sistema de Alerta de Medicamentos de Uso Humano</h1>
<div class="formulario_menu">
	<ul class="formulario_menu">
    <li class="formulario_menu">Módulo de Usuarios
    	<ul class="formulario_menu_2">
        	<li class="formulario_menu_2"><a class="formulario" href="agregar_usuario_ce.php" title="Agregar Usuario">Agregar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="modificar_usuario_ce.php" title="Modificar Usuario">Modificar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="eliminar_usuario_ce.php" title="Eliminar Usuario">Eliminar Usuario</a></li>
            <li class="formulario_menu_2"><a class="formulario" href="consultar_usuario_ce.php" title="Consultar Usuario">Consultar Usuario</a></li>
        </ul>
    </li>
    
    </ul>
</div>';

}

function seccion(){
			include ('conexion_ce.php');

			// Selecciona de la tabla seccion los items disponibles
			$sql="SELECT * FROM seccion";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$seccion=$row['seccion'];
			$cod_seccion=$row['cod_seccion'];
				echo "<option class='formulario' value='" .  $cod_seccion . "'>" .  $seccion . '</option>';			
			}
}

function tipo_alerta(){
			include ('conexion_ce.php');

			// Selecciona de la tabla seccion los items disponibles
			$sql="SELECT * FROM tipo_alerta";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tipo_alerta=$row['tipo_alerta'];
				echo "<option class='formulario' value='" .  $tipo_alerta . "'>" .  $tipo_alerta . '</option>';			
			}
}

function ambito(){
			include ('conexion_ce.php');

			// Selecciona de la tabla seccion los items disponibles
			$sql="SELECT * FROM ambito";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$ambito=$row['ambito'];
				echo "<option class='formulario' value='" .  $ambito . "'>" .  $ambito . '</option>';			
			}
}

function consulta_rapida($tabla){
			include ('conexion_ce.php');

			// Selecciona de la tabla seccion los items disponibles
			$sql="SELECT * FROM $tabla";
			$seleccion=mysql_query($sql,$conexion);
			while ($row = mysql_fetch_array($seleccion)){
			$tabla_1=$row[$tabla];
			$tabla_id=$row["cod_".$tabla];
				echo "<option class='formulario' value='" .  $tabla_id . "'>" .  $tabla_1 . '</option>';			
			}
}


//Formularios estilos
// Estilos del la etiqueta <form> de inicio
function formulario_inicio($titulo_form,$name_form,$id_form,$css_form,$metodo,$onsubmit, $action,$enctype){
	echo '<form class="'. $css_form .'" id="'. $id_form .'" method="'. $metodo .'" name="'. $name_form .'" onsubmit="'. $onsubmit .'" action="'. $action .'" enctype="'. $enctype .'">';
	echo '<label class="formulario_titulo">'. $titulo_form .'</label>';
}

// Estilos para input type="text"
function input_text($titulo_campo,$name_id, $css_input,$id_div){
	$js_name_id="'".$name_id."'";
	echo '<div class="formulario" id="'. $id_div .'">';
    echo '<label class="formulario">' . $titulo_campo . ":" . '</label>';
	
    echo '<input class="' . $css_input . '" name="' . $name_id . '" id="'. $name_id .  '" type="text" onblur="obligatorio('.$js_name_id.')"/>';
	echo '</div>';
	}
// Estilos para input type="password"
function input_password($titulo_campo,$name_id, $css_input,$id_div){
	$js_name_id="'".$name_id."'";
	echo '<div class="formulario" id="'. $id_div .'">';
    echo '<label class="formulario">' . $titulo_campo . ":" . '</label>';
	
    echo '<input class="' . $css_input . '" name="' . $name_id . '" id="'. $name_id .  '" type="password" onblur="obligatorio('.$js_name_id.')"/>';
	echo '</div>';
	}
// Estilos para input type="text" <<<Solo Números>>>
function input_numero($titulo_campo,$name_id, $css_input, $onblur, $onkeypress, $maxlength,$id_div){
	$js_name_id="'".$name_id."'";
	echo '<div class="formulario" id="'. $id_div .'">';
	echo '<label class="formulario">' . $titulo_campo . ":" . '</label>';
	echo '<input class="'. $css_input .'" name="'. $name_id .'" id="'. $name_id .'" type="text" onblur="'. $onblur .'obligatorio('.$js_name_id.');" onkeypress="'. $onkeypress .'" maxlength="'. $maxlength .'"/>';
	echo '</div>';
	}
// Estilos para etiquetas select
function selects($titulo_campo, $name_id, $css_input, $funciones_js, $bd_contenido_tabla, $id_div){
	echo '<div class="formulario" id="'. $id_div .'">';
	echo '<label class="formulario">' . $titulo_campo . ":" . '</label>';
	
	echo '<select class="'. $css_input .'" name="'. $name_id .'" id="'. $name_id .'" onchange="'. $funciones_js .'">';
    echo '<option class="formulario" value="Seleccione...">Seleccione...</option>';
    if($bd_contenido_tabla!=""){consulta_rapida($bd_contenido_tabla);}
    echo '</select>';
	echo '</div>';
	}
// Estilos para input type="text" Solo Fecha
function input_fecha($titulo_campo,$name_id, $css_input,$id_div){
	$js_name_id="'".$name_id."'";
	echo '<link href="css/calendario.css" type="text/css" rel="stylesheet">';
	echo '<script src="js/calendar.js" type="text/javascript"></script>';
	echo '<script src="js/calendar-es.js" type="text/javascript"></script>';
	echo '<script src="js/calendar-setup.js" type="text/javascript"></script>';
    
	echo '<div class="formulario" id="'. $id_div .'">';
    echo '<label class="formulario">' . $titulo_campo . ":" . '</label>';
	echo '<input class="' . $css_input . '" name="' . $name_id . '" id="'. $name_id .  '" type="text" onblur="obligatorio('.$js_name_id.')" readonly="readonly" id="lanzador"/>';
	// script que define y configura el calendario
	echo '<script type="text/javascript"> 
   		Calendar.setup({ 
    	inputField     :    "fecha",     
     	ifFormat     :     "%d-%m-%Y",     
     	button     :    "lanzador"     
		}); 
	</script>';
	/*Guia codigo Superior:
		inputField     :    "fecha",     // id del campo de texto 
     	ifFormat     :     "%d-%m-%Y",     // formato de la fecha que se escriba en el campo de texto 
     	button     :    "lanzador"     // el id del botón que lanzará el calendario 
		}); 
	
	*/
	echo '</div>';
	}
// Estilos para etiquetas input type="file"
function input_file($id_div, $id_titulo, $titulo_campo, $name_id,$value){
	// Inicio: Scripts para modificar la etiqueta input type='file'
	echo '<script type="text/javascript" src="js/enhance.js"></script>		
			<script type="text/javascript">';
				// Run capabilities test
	echo"enhance({
				loadScripts: [
						'js/jquery_file.min.js',
						'js/jQuery.fileinput.js',
						'js/example.js'
				],
				loadStyles: ['css/enhanced.css']	
				});   
		</script>";
	
	echo '<div class="formulario" id="'. $id_div .'">';
	echo '<label class="formulario" id="'. $id_titulo .'">' . $titulo_campo . ":" . '</label>';
	echo '<input name="' . $name_id . '" id="'. $name_id .  '" type="file" onselect="revisarObligatorio(this);" value="'. $value .'"/>';
	echo '</div>';
	}
	

// Estilos para botones formularios submit
function button($titulo_campo,$name_id, $css_input, $value, $id_div){
	echo '<div class="formulario" id="'. $id_div .'">';
	echo '<button class="'. $css_input .'" name="'. $name_id .'" id="'. $name_id .'" type="submit" value="'. $value .'">'. $titulo_campo .'</button>';
	echo '</div>';
	echo '</form>';
}
function men_ocul() {
	echo '<div class="oculto" id="menu_oculto_p">
    	<div class="oculto1 oculto2" id="menu_oculto">
		<h3>Especialidades Farmacéutica y Materiales Médicos</h3><br>
        <a href="#" onmouseover="fondoculto(this);" onclick="">&raquo; Antecedentes</a><br>
        <a href="#">&raquo; Objetivos</a><br>
        <a href="#" onclick="">&raquo; Organigrama Funcional</a><br>
        <a href="#" onclick="">&raquo; Funciones</a><br>
        <a href="#" onclick="">&raquo; Normas y Base Legales</a><br>
        <a href="#" onclick="">&raquo; Definiciones</a><br>
        <a href="#" onclick="">&raquo; </a><br>
        </div>';
echo '<div class="oculto1">
        <p>M</p>
        <p>E</p>
        <p>N</p>
        <p>U</p>
        </div>   
        <div class="oculto1">';
echo '<h5 onclick="menuOculto'; echo "('menu_oculto','menu_oculto_p',this);"; echo '">&raquo;</h5>
        </div>
	</div>';    
	}
function menu_oculto($variable){

	 switch($variable) {
		 // RC
			// CENAVIF
			case "alertas_ce.php":
			men_ocul();
			break;
			default:
			echo $variable;

}
	}
// Funcion de Sitios de Interés
function site_inicio($id,$titulo){
	echo '<div class="subsite" id="'. $id .'">
        <h1>'. $titulo .'</h1>	
                   
       ';
}
function sub_site_i($titulo_pais,$logo_bandera){
	echo'<div>
            <h1>'. $titulo_pais .'</h1>
            <img src="imagenes/img_sitios/banderas/'. $logo_bandera .'" title="'. $titulo_pais .'" alt="Imagen" />
		';
	}
function links($abreviado,$texto,$link){
	echo'<div>';
	if ($abreviado!=""){echo'<h2>'. $abreviado .'</h2>';}
	echo'
                <h3>'. $texto .'</h3>
                <a title="'. $texto .'" target="_blank" href="'. $link .'">'. $link .' &raquo;</a>
            </div>';
	}
function sub_site_f (){
	echo '</div>';
	}

function site_fin(){
	echo'</div>';
	}



//CONECTOR

function ConectarBD(){
  return mysql_connect("localhost","root","s3cur1tys3c");
}


//EJECUTAR EXEC

function EjecuteExec($conector,$sql1){
    mysql_select_db("portal_web",$conector);
	@mysql_query("SET NAMES 'utf8'");
    return mysql_query($sql1,$conector);
	
}


//EJECUTAR FETCH

function ObtenerFila($conector){
    return mysql_fetch_row($conector);
}

//
function NumFila($q){
    return mysql_num_rows($q);
}

?>


