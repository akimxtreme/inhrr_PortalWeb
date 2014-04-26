<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/menu_superior.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Comisión de Contrataciones del Instituto Nacional de Higiene "Rafael Rangel"</title>
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
<div class="seccion_4">
<h3 class="contenedor_1">COMISIÓN DE CONTRATACIONES</h3>
<h1 class="contenedor_0">CONCURSOS ABIERTOS ACTUALMENTE</h1>
<p class="contenedor_1">El Instituto Nacional de Higiene cuenta con la Comisión de Contrataciones para informar a todos sus proveedores de los Concursos Abiertos actualmente.</p>
<table class="global">
        <tr>
            <td class="w15 global_titulo">Número</td>
            <td class="w75 global_titulo">Título</td>
            <td class="w10 global_titulo">Descarga</td>
        </tr>
        <?php
                    // Abre la Conexion con la BD
                    include_once('conexion/conexion_portal.php');
                    // Selecciona todos los Concursos en estado activo de la Comisión de Contrataciones
                    $sql = "SELECT * FROM comision_contrataciones WHERE cod_estado=1 ORDER BY fecha DESC";
		            $seleccion=mysql_query($sql,$conexion);
		            
		            //Variables:
		            $url = 'pdf/pdf_lc/'; // Ruta de todos los Concursos, de la Comisión de Contrataciones		            
		            // Muestra los datos de la consulta
		            while ($row = mysql_fetch_row($seleccion)){
                        echo '<tr>';
                            echo '<td class="w15 azulT global "><strong>'. $row[1] .'</strong></td>';
                            // Seleccionando el Estatus del Concurso
                            $sql2 = "SELECT estatus FROM concurso_estatus WHERE id=$row[6]";
                            $seleccion2=mysql_query($sql2,$conexion);
                            while ($row2 = mysql_fetch_row($seleccion2)){
                                echo '<td class="w75 global shadow"><strong>('.$row2[0].') '.$row[1].'</strong>.'.$row[2].'</td>';
                            }
                            echo '<td class="w10 global"><a href="'.$url.$row[5].'" target="_blank"><img class="descarga" src="imagenes/img_id/doc_pdf.png" alt="Archivo adjunto '.$row[1].'"/></a></td>';                        
                                                        
                        echo '</tr>';
                    }
                    ?> 
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="info_2" -->
<!-- InstanceEndEditable -->
</div>

	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>