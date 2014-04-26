<?php
session_start();
?>
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
<title>INHRR - Control de Expedientes</title>
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/scripts_cv.js"></script>
<script type="text/javascript" src="tcal.js"></script> 
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

<!-- InstanceBeginEditable name="contenido" -->
<!-- CONTENIDO -->
<?php
$cod = $_SESSION['cod'];
if($cod == 1){
echo '
<div class="cv">
<h1 class="cv">Control de Expedientes</h1>
<a href="cv_administracion.php"><h4 class="cv_1">Principal</h4></a>
<a href="destruir.php"><h4 class="cv">Cerrar sesión</h4></a>
<div class="seccion_1">
<h1 class="contenedor_0">CONTROL DE EXPEDIENTES</h1>
<!-- Módulo 1: Agregar Expediente  -->
<a class="temas" href="ce.php" title="#">
<h3 class="temas">Agregar Expediente</h3>
<img class="temas" alt="Agregar Expediente" src="imagenes/img_cv/cv_6.png"/>
<p class="temas">Módulo para agregar expedientes</p>
</a>
<!-- Módulo 2: Modificar Expediente  -->
<a class="temas" href="ce_modificar.php" title="#">
<h3 class="temas">Modificar Expediente</h3>
<img class="temas" alt="Modificar Expediente" src="imagenes/img_cv/cv_7.png"/>
<p class="temas">Módulo para modificar un expediente</p>
</a>
<!-- Módulo 3: Consulta de Expedientes -->
<a class="temas" href="ce_consulta.php" title="#">
<h3 class="temas">Consulta de Expedientes</h3>
<img class="temas" alt="Consulta de Expedientes" src="imagenes/img_cv/cv_5.png"/>
<p class="temas">Módulo para consultar todos los expedientes</p>
</a>
<!-- Módulo 4: Cambiar Ubicación -->
<a class="temas" href="ce_ubicacion.php" title="#">
<h3 class="temas">Modificar Ubicación</h3>
<img class="temas" alt="Consulta de Expedientes" src="imagenes/img_cv/cv_8.png"/>
<p class="temas">Módulo para modificar la ubicación del expediente</p>
</a>
</div>
</div>
';
}else {
	echo '
	<div class="cv">
	<h1 class="cv">Acceso Denegado - Espacio de Administrador</h1>
	<a href="cv_acceso.php"><h4 class="cv">Volver a la página principal</h4></a>
	</div>
	';
	}

?>
<div class="cv">
			<form class="cv" name="busqueda" method="post" action="">
            <h2 class="cv">CONSULTA DE EXPEDIENTES</h2>
			<h2 class="cv">Búsqueda por campo</h2>
			<h3 class="cv">Seleccione el campo de tu interés para realizar la búsqueda:</h3>
			<span class="cv">
            <select class="cv" name="campo">
               <option class="cv" value="ce_cedula">Cédula</option>
               <option class="cv" value="cod_carnet">Código de Carnet</option>
               <option class="cv" value="ce_nombre_completo">Nombre</option>
             </select>
            </span>
            <span class="cv">
            <input class="cv" type="text" name="valor" id="valor">
            </span>
            <button type="submit" name="boton" value="Buscar" onclick=" return llenar_campo();">Buscar</button>
            </form>
            
        <?php if (@$_POST['boton']==='Buscar') { ?>
        <?php 
			$valor= $_POST['valor'];
      	   $campo= $_POST['campo'];
			?>
            <table class="cv" border="1" cellpadding=2" cellspacing="0">
			<tr>
				<th class="cv">Código de Carnet</th>
				<th class="cv">Cédula</th>
				<th class="cv">Nombre Completo</th>
				<th class="cv">Departamento</th>
				<th class="cv">Nacionalidad</th>
                <th class="cv">Expediente Completo</th>' 
			</tr>
            <?php
			   
			   //instruccion mysql_connect(servidor,usuario,clave)
			  include "conexion.php";
			     if ($campo=='titulo'){
					  $sql="select * from control_de_expedientes where $campo like '%$valor%'";
			   $q=mysql_query($sql,$conexion);
				  	   }else{
			   $sql="select * from control_de_expedientes where $campo like '%$valor%'";
			   $q=mysql_query($sql,$conexion);
					   }
			   //armamos un arreglo con la instruccion mysql_fetch_array y lo mostramos
			   while($r=mysql_fetch_array($q)){
			?>
            <tr>

                   <form class="cv" action="ce_consulta_completo.php" method="post" >
				<td class="cv"><?php echo $r['cod_carnet']; ?></td>
				<td class="cv"><?php echo $r['ce_cedula']; ?></td>
				<td class="cv"><?php echo $r['ce_nombre_completo']; ?></td>
				<td class="cv"><?php echo $r['ce_departamento']; ?></td>
				<td class="cv"><?php echo $r['ce_nacionalidad']; ?></td>
                <td class="cv"><input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/>
                </td>
                <input type='hidden' name='ced_1' value='<?php echo $r["ce_cedula"]; ?>'>
                
                
				
				</form>
             <?php
			           }
			   }
			 ?>           
           
           
           </tr>
       
       
       </table>
       
</div>



<!------------------------------------------------- FIN - SITIOS DE INTERES ---------------------------------------------------------------->
<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>