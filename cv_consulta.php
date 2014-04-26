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
<?php
include ('conexion.php');
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
<h2 class="cv">Sintesis Curriculares</h2>
<h3 class="cv">Consulta de todas las sisntesis curriculares almacenadas:</h3>
<table class="cv" border="1" cellpadding=2" cellspacing="0">
			<tr>
				<th class="cv">Cédula</th>
				<th class="cv">Nombre Completo</th>
				<th class="cv">Género</th>
				<th class="cv">Correo Electrónico</th>
				<th class="cv">Teléfono Personal</th>
                <th class="cv">Teléfono - Habitación</th>
                <th class="cv">Curriculum Completo</th>
			</tr>
				<?php
				$sql = "SELECT * FROM datos_basicos";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            <form class="cv" action="cv_completo.php" method="post" >
				<td class="cv"><?php echo $r['cedula']; ?></td>
				<td class="cv"><?php echo $r['nombre']; ?></td>
				<td class="cv"><?php echo $r['genero']; ?></td>
				<td class="cv"><?php echo $r['correo']; ?></td>
				<td class="cv"><?php echo $r['telefono_movil']; ?></td>
                <td class="cv"><?php echo $r['telefono_habitacion']; ?></td>
                <td class="cv"><input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/>
                </td>
                <input type='hidden' name='ced_1' value='<?php echo $r["cedula"]; ?>'>
                
                
				
</form>
			</tr>
					<?php
				}
					?>
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