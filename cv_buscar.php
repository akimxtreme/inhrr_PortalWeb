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
<title>INHRR - Sistema Automatizado de Sintesis Curriculares</title>
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
<h1 class="cv">Espacio del Administrador</h1>
<a href="cv_administracion.php"><h4 class="cv_1">Principal</h4></a>
<a href="destruir.php"><h4 class="cv">Cerrar sesión</h4></a>
<div class="seccion_1">
<h1 class="contenedor_0">SISTEMA AUTOMATIZADO DE SINTESIS CURRICULARES</h1>
<!-- Módulo 1: Consultar todos las Sintesis Curriculares  -->
<a class="temas" href="cv_consulta.php" title="#">
<h3 class="temas">Consultar todas las Sintesis Curriculares</h3>
<img class="temas" alt="Consultar todas las Sintesis Curriculares" src="imagenes/img_cv/cv_1.png"/>
<p class="temas">Consulta de todos los usuarios</p>
</a>
<!-- Módulo 2: Búsqueda de Sintesis Curricular por Campo  -->
<a class="temas" href="cv_buscar.php" title="#">
<h3 class="temas">Búsqueda por campo</h3>
<img class="temas" alt="Búsqueda de Sintesis Curricular por Campo" src="imagenes/img_cv/cv_2.png"/>
<p class="temas">Búsqueda de Sintesis Curricular por Campo</p>
</a>
<!-- Módulo 4: Agregar Sintesis Curricular -->
<a class="temas" href="cv.php" title="#" target="_blank">
<h3 class="temas">Agregar Sintesis Curricular</h3>
<img class="temas" alt="Agregar Sintesis Curricular" src="imagenes/img_cv/cv_4.png"/>
<p class="temas">Acceso directo al formulario principal de Sintesis Curricular</p>
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
			<h2 class="cv">Búsqueda por campo</h2>
			<h3 class="cv">Seleccione el campo de tu interés para realizar la búsqueda:</h3>
			<span class="cv">
            <select class="cv" name="campo">
               <option class="cv" value="cedula">Cédula</option>
               <option class="cv" value="titulo">Titulo</option>
               <option class="cv" value="nombre">Nombre</option>
               <option class="cv" value="genero">Genero</option>
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
				<th class="cv">Cédula</th>
				<th class="cv"><?php if($campo =='titulo'){echo 'Titulo';}else{echo'Nombre Completo';} ?></th>
				<th class="cv"><?php if($campo =='titulo'){echo 'Instituto';}else{echo'Género';} ?></th>
				<th class="cv"><?php if($campo =='titulo'){echo 'País';}else{echo'Correo Electrónico';} ?></th>
				<th class="cv"><?php if($campo =='titulo'){echo 'Año de Egreso';}else{echo'Teléfono Personal';} ?></th>
                <?php if($campo != 'titulo') echo '<th class="cv">Teléfono - Habitación</th>';?>
                <th class="cv">Curriculum Completo</th>' 
			</tr>
            <?php
			   
			   //instruccion mysql_connect(servidor,usuario,clave)
			  include ('conexion.php');
			     if ($campo=='titulo'){
					  $sql="select * from estudios where $campo like '%$valor%'";
			   $q=mysql_query($sql,$conexion);
				  	   }else{
			   $sql="select * from datos_basicos where $campo like '%$valor%'";
			   $q=mysql_query($sql,$conexion);
					   }
			   //armamos un arreglo con la instruccion mysql_fetch_array y lo mostramos
			   while($r=mysql_fetch_array($q)){
			?>
            <tr>

                   <form class="cv" action="cv_completo.php" method="post" >
				<td class="cv"><?php echo $r['cedula']; ?></td>
				<td class="cv"><?php if ($campo =='titulo'){echo $r['titulo'];}else{echo $r['nombre'];} ?></td>
				<td class="cv"><?php if ($campo =='titulo'){echo $r['instituto'];}else{echo $r['genero'];}?></td>
				<td class="cv"><?php if ($campo =='titulo'){echo $r['pais'];}else{echo $r['correo'];}?></td>
				<td class="cv"><?php if ($campo =='titulo'){echo $r['anio_egreso'];}else{echo $r['telefono_movil'];}?></td>
                <?php if ($campo !=='titulo'){ echo '<td class="cv">';echo $r['telefono_habitacion']; echo '</td>';}?>
                <td class="cv"><input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/>
                </td>
                <input type='hidden' name='ced_1' value='<?php echo $r["cedula"]; ?>'>
                
                
				
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