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
<title>Gerencia Sectorial de Registro y Control - Formularios - Productos Biológicos</title>
 
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
/*$conexion=mysql_connect('localhost','root','2006')
or die ("NO SE PUEDE CONECTAR");
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");*/


?>

<?php
//mysql_connect: Abre una conexión a un servidor MySQL
include_once('conexion/conexion_portal.php');

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>


<script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/infogrid.js'></script>  
<div class="seccion_1">
<h2 class="contenedor_1">Formularios - Productos Biológicos</h2>
<p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>

<div id="page-wrap2">
		
		<div class="info-col">
		 		
    		  		
    		<dl>
    		 
             
              
    		  <dt>Cambio Post-Registro Aspectos Legales Farmacéutico (Patrocinante) &raquo;</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>              
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales Farmacéutico (Adjunto al Patrocinante) &raquo;</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img  class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO ADJUNTO AL PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambios Post-Registro Aspectos Legales (Propietario) &raquo;</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES PROPIETARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Asepectos Legales (Razón Social) &raquo;</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES RAZON SOCIAL'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            <td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales (Representante) &raquo;</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES REPRESENTANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>              
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales (Almacén) &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES ALMACEN'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Incorporación de Advertencias Recomendadas por la OMS / OPS &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS RECOMENDADAS POR LA OMS / OPS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Incorporación de Advertencias Sugeridas por una Organización No Gubernamental ó Sociedad Científica Independiente Reconocida &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS SUGERIDAS POR UNA ORGANIZACION NO GUBERNAMENTAL O SOCIEDAD CIENTIFICA INDEPENDIENTE RECONOCIDA'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Grupo Etario &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLiNICOS - GRUPO ETARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Indicación &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLiNICOS - INDICACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
               <dt>Cambio Post-Registro Aspectos Clínicos - Presentación Previamente Autorizada a Otro Producto Farmacéutico &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - PRESENTACION PREVIAMENTE AUTORIZADA A OTRO PRODUCTO FARMACEUTICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Nueva Presentación &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - NUEVA PRESENTACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            <td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Rango Posológico &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - RANGO POSOLOGICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Agregar Restricciones de Uso &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - AGREGAR RESTRICCIONES DE USO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Eliminar Restricciones de Uso &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
  <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - ELIMINAR RESTRICCIONES DE USO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Vía de Administración &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - VIA DE ADMINISTRACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Textos &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO TEXTOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Etiqueta Autoadhesiva ó Impresión Provisional &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ETIQUETA AUTOADHESIVA O IMPRESION PROVISIONAL'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Farmacéuticos &raquo;</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="w55 global_titulo">Título</td>
   <td class="w15 global_titulo">Cod</td>
   <td class="w15 global_titulo">Formulario</td>
   <td class="w15 global_titulo">Instructivo</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img class='descarga' alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS FARMACEUTICOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            <td class="w55 global"><?php echo $r['titulo_form']; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo $r['cod_form']; ?><br /><br /><br /></td>
				<td class="w15 global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="w15 global_adjunto shadow"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?><br /></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              
              
              
    		</dl> 
		</div>
		
        
			
	</div>
</div>
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