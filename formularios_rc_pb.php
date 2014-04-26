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
$conexion=mysql_connect('172.16.0.10','root','s@lmon3ll@') or die ("NO SE PUEDE CONECTAR");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('portal_web',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>


<script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/infogrid.js'></script>  
<div class="seccion_1">
<h2 class="contenedor_1">Formularios - Productos Biológicos</h2>
<p class="contenedor_1">Para descargar un Formulario u Instructivo determinado debe hacer clic sobre el icono.<img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="icono de descarga"/></p>

<div id="page-wrap">
		
		<div class="info-col">
		 		
    		  		
    		<dl>
    		  <dt>Registro Sanitario de Vacunas</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    <td class="global_titulo">Anexo</td>
   </tr>
				<?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				$urli3="' title='Anexo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'REGISTRO SANITARIO DE VACUNAS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                <td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_otro'] . $urli3; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>        
              </dd>
              <dt>Registro Sanitario de Hemoderivados y Afines</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    <td class="global_titulo">Anexo</td>
   </tr>
				<?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				$urli3="' title='Anexo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'REGISTRO SANITARIO DE HEMODERIVADOS Y AFINES'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                <td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_otro'] . $urli3; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Registro Sanitario de Productos ADN Recombinantes, Anticuerpos Monoclonales y Terapéuticos</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    <td class="global_titulo">Anexo</td>
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				$urli3="' title='Anexo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
				
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'REGISTRO SANITARIO DE PRODUCTOS ADN Y RECOMBINANTES'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                <td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_otro'] . $urli3; ?></td>
				            
			</tr>
					<?php
				}
					?>
		</table>
    		  </dd>
              <dt>Renovación Registro Sanitario</dt>
    		  <dd>
               <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'RENOVACION REGISTRO SANITARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Liberación de Lote de Productos Biológicos</dt>
    		  <dd>
               <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'LIBERACION DE LOTE DE PRODUCTOS BIOLOGICOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
    		  <dt>Cambio Post-Registro Aspectos Legales Farmacéutico (Patrocinante)</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>              
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales Farmacéutico (Adjunto al Patrocinante)</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO ADJUNTO AL PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambios Post-Registro Aspectos Legales (Propietario)</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES PROPIETARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Asepectos Legales (Razón Social)</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES RAZON SOCIAL'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales (Representante)</dt>
    		  <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES REPRESENTANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>              
              </dd>
              <dt>Cambio Post-Registro Aspectos Legales (Almacén)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS LEGALES ALMACEN'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Incorporación de Advertencias Recomendadas por la OMS / OPS</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS RECOMENDADAS POR LA OMS / OPS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Incorporación de Advertencias Sugeridas por una Organización No Gubernamental ó Sociedad Científica Independiente Reconocida</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS SUGERIDAS POR UNA ORGANIZACION NO GUBERNAMENTAL O SOCIEDAD CIENTIFICA INDEPENDIENTE RECONOCIDA'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Grupo Etario</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLiNICOS - GRUPO ETARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Indicación</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLiNICOS - INDICACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
               <dt>Cambio Post-Registro Aspectos Clínicos - Presentación Previamente Autorizada a Otro Producto Farmacéutico</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - PRESENTACION PREVIAMENTE AUTORIZADA A OTRO PRODUCTO FARMACEUTICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Nueva Presentación</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - NUEVA PRESENTACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Rango Posológico</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - RANGO POSOLOGICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Agregar Restricciones de Uso</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - AGREGAR RESTRICCIONES DE USO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Eliminar Restricciones de Uso</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - ELIMINAR RESTRICCIONES DE USO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Clínicos - Vía de Administración</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - VIA DE ADMINISTRACION'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Textos</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO TEXTOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Etiqueta Autoadhesiva ó Impresión Provisional</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ETIQUETA AUTOADHESIVA O IMPRESION PROVISIONAL'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Cambio Post-Registro Aspectos Farmacéuticos</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'CAMBIO POSTREGISTRO ASPECTOS FARMACEUTICOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Reporte de Desviaciones en la Calidad</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'REPORTE DE DESVIACIONES EN LA CALIDAD'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Evaluación de Productos de Tecnología Médica de Origen Biológico</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'EVALUACION DE PRODUCTOS DE TECNOLOGIA MEDICA DE ORIGEN BIOLOGICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Evaluación de Accidentes en Cadena de Frío</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'EVALUACION DE ACCIDENTES EN CADENA DE FRIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Evaluación de Kits para Diagnóstico</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'EVALUACION DE KITS BIOLOGICOS PARA DIAGNOSTICO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Autorización de Protocolos Clínicos para Productos Biológicos</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'AUTORIZACION DE PROTOCOLOS CLINICOS PARA PRODUCTOS BIOLOGICOS'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (ALMACÉN)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - ALMACEN'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (FARMACÉUTICO ADJUNTO AL PATROCINANTE)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - FARMACEUTICO ADJUNTO AL PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (FARMACÉUTICO PATROCINANTE)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - FARMACEUTICO PATROCINANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (PROPIETARIO)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - PROPIETARIO'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (RAZÓN SOCIAL)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - RAZON SOCIAL'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
			</tr>
					<?php
				}
					?>
		</table>
              </dd>
              <dt>Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (REPRESENTANTE)</dt>
              <dd>
              <table class="global">
   <tr>
   <td class="global_titulo">Título</td>
   <td class="global_titulo">Cod</td>
   <td class="global_titulo">Formulario</td>
   <td class="global_titulo">Instructivo de llenado</td>
    
   </tr>
              <?php
				$urlf1="<a href='doc/rc_doc/rc_pb/";
				$urlf2="' title='Formulario' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png' /></a>";
				$urli1="<a href='pdf/rc_pdf/pdf_pb/";
				$urli2="' title='Instructivo' target='_blank'><img alt='Adjunto' src='imagenes/img_id/doc_pdf.png'/></a>";
								
				$sql = "SELECT * FROM formularios WHERE tipo_producto = 'PB' AND tipo_tramite = 'MODIFICACION SOLICITUD REGISTRO - REPRESENTANTE'";
				$q = mysql_query($sql,$conexion);
				while($r=mysql_fetch_array($q)){
				?> 
			<tr>
            
				<td class="global"><?php echo $r['titulo_form']; ?></td>
				<td class="global_adjunto"><?php echo $r['cod_form']; ?></td>
				<td class="global_adjunto"><?php echo $urlf1 . $r['adjunto_form'] . $urlf2; ?></td>
				<td class="global_adjunto"><?php echo  $urli1 . $r['adjunto_inst'] . $urli2; ?></td>
                			            
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