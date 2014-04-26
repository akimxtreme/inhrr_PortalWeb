<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/administracion_cv.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Espacio del Administrador</title>
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



<!------------------------------------------------- INICIO CONTENIDO ---------------------------------------------------------------->


	<link rel="stylesheet" href="css/estilos_gerencias.css">
	<script src='js/jquery.min.gerencias.js'></script>
    <script src='js/organictabs.jquery.js'></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 300
            });
    
        });
    </script>
   

	
    <div id="page-wrap">
    
	

	<h1 class="titulo_gerencia"><!-- InstanceBeginEditable name="titulo" -->Administracion del Sistema de Curriculum en Linea<!-- InstanceEndEditable --></h1>
	
	<div id="example-one">
        			
        	<ul class="nav">
            <!-- InstanceBeginEditable name="menu_gerencias	" -->
                <li class="nav-one"><a href="#featured" class="current">Todos los CV</a></li>
                <li class="nav-two"><a href="#core">Buscar por campo</a></li>
                <li class="nav-three"><a href="#jquerytuts">Editar/Borar CV</a></li>
                <li class="nav-four "><a href="#classics">Agregar CV</a></li>
                <li class="nav-cinco last"><a href="#cinco">Menu 5</a></li>
                <!-- InstanceEndEditable -->	
            </ul>
        
 
           
        	
            
            
            
            
            <div class="list-wrap">
        	<!-- InstanceBeginEditable name="contenido_menu_gerencias" --> 	
        		<ul id="featured">
                <div class="cv_cv">
        		
                    <table border="1" cellpadding=2" cellspacing="0">
			<tr>
				<th>Cédula</th>
				<th>Nombre Completo</th>
				<th>Género</th>
				<th>Correo Electrónico</th>
				<th>Teléfono Personal</th>
                <th>Teléfono - Habitación</th>
                <th>Curriculum Completo</th>
			</tr>
				<?php
				$conex = mysql_connect('localhost','root','');
				mysql_select_db('curriculum',$conex);
				$sql = "SELECT * FROM datos_basicos";
				$q = mysql_query($sql,$conex);
				while($r=mysql_fetch_array($q)){
				?>
			<tr>
            <form class="admin" action="datos_solicitador_cta.php" method="post" >
				<td><?php echo $r['cedula']; ?></td>
				<td><?php echo $r['nombre']; ?></td>
				<td><?php echo $r['genero']; ?></td>
				<td><?php echo $r['correo']; ?></td>
				<td><?php echo $r['telefono_movil']; ?></td>
                <td><?php echo $r['telefono_habitacion']; ?></td>
                <td><input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/></td>
                <td><input type='hidden' name='ced_1' value='<?php echo $cedula;?>'></td>
				
</form>
			</tr>
					<?php
				}
					?>
		</table>
                   
                   
                   </div>
    		    </ul>
        		 
                 
                 
        		 <ul id="core" class="hide">
                   <div class="gerencia">
        			
                    	<form name="busqueda" method="post" action="">
		<input type="text" name="valor">
		<input type="submit" name="boton" value="buscar">
	</form>
<?php if(@$_POST['boton']==='buscar'){?>
	<table border="1" cellpadding=2" cellspacing="0">
					<tr>
						<th bgcolor="lightblue">Nombre</th>
						<th bgcolor="lightblue">Direccion</th>
						<th bgcolor="lightblue">Sexo</th>
						<th bgcolor="lightblue">Pais</th>
						<th bgcolor="lightblue">email</th>
					</tr>
	<?php
		$valor = $_POST['valor'];
		$sql2 = "SELECT * FROM usuarios WHERE nombre like '$valor%'";
		$f = mysql_query($sql2,$conex);
		while($s=mysql_fetch_array($f)){
	?>	
				<tr>
				<td><?php echo $s['cedula']; ?></td>
				<td><?php echo $s['nombre']; ?></td>
				<td><?php echo $s['genero']; ?></td>
				<td><?php echo $s['correo']; ?></td>
				<td><?php echo $s['telefono_movil']; ?></td>
                <td><?php echo $s['telefono_habitacion']; ?></td>
                <td><input class="img" type='image' valign='middle' name='boton_submit'  src='imagenes/detalles.png' alt='Ver detalles' border="0"/></td>
                <td><input type='hidden' name='ced_1' value='<?php echo $cedula;?>'></td>
				
				</tr>
	<?php	
	}

	
	
				
}
	?>
	</table><br/>
                    
                    
                   </div>
                 
        		 </ul>
        		 
        		 <ul id="jquerytuts" class="hide">
                 <div class="gerencia">
        		    <li><a href="http://css-tricks.com/anythingslider-jquery-plugin/">Anything Slider jQuery Plugin</a></li>
        		    <li><a href="http://css-tricks.com/moving-boxes/">Moving Boxes</a></li>
        			<li><a href="http://css-tricks.com/simple-jquery-dropdowns/">Simple jQuery Dropdowns</a></li>
        		</div>
        		 </ul>
        		 
        		 <ul id="classics" class="hide">
                  <div class="gerencia">
                    <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                </div>
        		 </ul>
        		 
                  <ul id="cinco" class="hide">
                   <div class="gerencia">
                    <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                     <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                </div>
        		 </ul>
        		 <!-- InstanceEndEditable -->	 
        	 </div> <!-- END List Wrap -->
             </div>
  </div>
         
        
	
		 
	
<!------------------------------------------------- FIN CONTENIDO --------------------------------------------------------------->


	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>