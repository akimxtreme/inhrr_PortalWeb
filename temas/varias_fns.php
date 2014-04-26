<!--ENCABEZADO DEL SISTEMA-->
<?php
function do_html_encabezado(){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/globas.css" type="text/css" />
<link rel="icon" href="imagenes/minilogo.png"/>
<title>Temas de Seguridad Laboral, Salud y Ambiente</title>
<script language="javascript" type="text/javascript">
</script>
<style type="text/css">
<!--
body {
	background: none;
	font-family:'Arial';
}
-->
</style>
</head>
<body>

  
<?php
}
?>
<!--ENCABEZADO DE FRAMES-->
<?php
function do_html_encabezado1(){
?>
<?php
}
?>

<h2 align="center">Enfermedades y Afecciones</h2>
<!--PIE DE PAGINA DEL SISTEMA-->
<?php
function do_html_pie(){
?>
	
  </body>
  </html>
<?php
}
?>

<!--ERROR 1:USUARIO NO VALIDO-->
<?php
function do_error1(){
	$tabla1 ="<table width='100%' align='center'><tr><td align='center'>";
	$tabla1.="<span class='Estilo10'>USUARIO NO VALIDO</span></td></tr>";
	$tabla1.="<tr><td align='center'><a href='index.php'>";
	$tabla1.="<img src='./imagenes/arrowleft.gif' width='16' height='16' border='0'>";
	$tabla1.="</a></td></tr></table>";
	echo '</br>',$tabla1;
}
?>

<!--ERROR 2:NO HA INTRODUCIDO LOS DATOS COMPLETOS-->
<?php
function do_error2(){
	$tabla1 ="<table align='left'><tr><td align='center'>";
	$tabla1.="<span class='Estilo10'>NO HA INTRODUCIDO LOS DATOS COMPLETOS. POR FAVOR INTENTE DE NUEVO.</span></td></tr>";
	$tabla1.="<tr><td align='center'><a href='fagdoc.php'>";
	$tabla1.="<img src='./imagenes/arrowleft.gif' width='16' height='16' border='0'>";
	$tabla1.="</a></td></tr></table>";
	echo '</br>',$tabla1;
}
?>

<!--ERROR 3:ERROR INGRESANDO LOS DATOS A LA BASE DE DATOS-->
<?php
function do_error3(){
	$tabla1 ="<table align='left'><tr><td align='center'>";
	$tabla1.="<span class='Estilo10'>ERROR INGRESANDO LOS DATOS A LA BASE DE DATOS</span></td></tr>";
	$tabla1.="<tr><td align='center'>";
	$tabla1.="<a href='javascript:history.back(1)'><img src='./imagenes/arrowleft.gif' width='16' height='16' border='0'></a>";
	//$tabla1.="<a href='fagdoc.php'><img src='../imagenes/arrowleft.gif' width='16' height='16' border='0'></a>";
	$tabla1.="</td></tr></table>";
	echo '</br>',$tabla1;
}
?>

<!--ERROR 4:DATOS NO EXISTEN O NO COINCIDEN-->
<?php
function do_error4(){
	$tabla1 ="<table width=100%' align='center'><tr><td align='center'>";
	$tabla1.="<span class='Estilo10'>DATOS NO EXISTEN O NO COINCIDEN</span></td></tr>";
	$tabla1.="<tr><td align='center'>";
	$tabla1.="<a href='sistema.php'><img src='../imagenes/arrowleft.gif' width='16' height='16' border='0'></a>";
	$tabla1.="</td></tr></table>";
	echo '</br>',$tabla1;
}
?>

<!--CONTINUAR 1:CONTINUAR-->
<?php
function do_continuar1($pag){
	$tabla1 ="<table align='center'><tr><td>";
	$tabla1.="<span class='Estilo10'>CONTINUAR</span></td></tr>";
	$tabla1.="<tr><td align='center'><a href='$pag'>";
	$tabla1.="<img src='./imagenes/arrowright.gif' width='16' height='16' border='0'>";
	$tabla1.="</a></td></tr></table>";
	echo '</br>',$tabla1;
}
?>

<!--CONVERTIR FECHA FORMATO ISO-->
<?php
function InvertirFecha ($d_txtfechnac){
		$d_txtfechnac = explode("/",$d_txtfechnac);
		krsort($d_txtfechnac);
		$d_txtfechnac = implode($d_txtfechnac,"-");
		return $d_txtfechnac;
}
?>

<!--CONVERTIR FECHA FORMATO DD/MM/AAAA-->
<?php
function ArreglarFecha ($d_txtfechnac){
		$d_txtfechnac = explode("-",$d_txtfechnac);
		krsort($d_txtfechnac);
		$d_txtfechnac = implode($d_txtfechnac,"/");
		return $d_txtfechnac;
}
?>