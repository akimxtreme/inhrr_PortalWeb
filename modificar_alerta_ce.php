<?php
session_start();
?>
<?php 
$privilegio = $_SESSION['privilegio'];
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
<title>INHRR - Sistema de Alerta de Medicamentos de Uso Humano - (Módulos)</title>
<script type="text/javascript" src="js/funciones_ce.js"></script>
<script type="text/javascript">
			function showselect(str){
				var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("dependiente").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("GET","funciones_2.php?c="+str,true);
				xmlhttp.send();
			}
		</script>
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
// Se encuentran casi todos los códigos de PHP
include ('funciones.php');
switch($privilegio){
			case '': echo '<html><head><meta http-equiv="REFRESH" content="0; url=ingreso_ce.php"></head></html>';break;
			case '0':
			menu_modulos();break;
			case '1':
			menu_modulo_1();break;
			case '2':
			menu_modulos();break;
			case '3':
			menu_modulo_3_4();break;
			case '4':
			menu_modulo_3_4();break;
			
			}
?>

<div class="seccion_4">

<?php formulario_inicio("Modificar Alertas","modificar_ce","cenavif_acceso","formulario","post","return ingreso_3(this);","","");?>
  
    
    <?php
	// buscar
	selects("Buscar","buscar","formulario","showselect(this.value);obligatorio('buscar');","buscar","");
	// opcion
	?>
    <div id="dependiente">
    <?php
	selects("Opción","opcion","formulario","obligatorio('buscar');","","");?>
    </div>
    <?php
    
   
	
    button("Agregar","agrega_alerta","formulario","agrega","") ?>
    


</div>
<?php echo '<h1 class="contenedor_0">'. $privilegio . '</h1>';
 ?>
<a class="formulario_boton" href="destruir_ce.php">Cerrar Sesión</a>
</div>

<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>