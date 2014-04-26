<!--ENCABEZADO DEL SISTEMA-->
<?php
function do_html_encabezado(){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="antecedente.css" type="text/css" />
<script language="javascript" type="text/javascript">
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 {
	font-size: 10px;
	color: #006699;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo2 {
	font-size: 16px;
	color: #000066;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo3 {
	font-size: 10px;
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000066;
}
.Estilo5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo7 {color: #FFFFFF}
.Estilo8 {
	font-size: 11px;
	color: #006699;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo9 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFF00;}
.Estilo10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000066;
	font-weight: bold;
}
.Estilo11 {font-family: Geneva, Arial, Helvetica, sans-serif;
			font-size: 18px;
			color: #FFFFFF;}
.Estilo12 {font-size: 18px; color: #000066; font-family: Arial, Helvetica, sans-serif;}
.Estilo13 {font-family: Arial, Helvetica, sans-serif;
		 font-size: 10px;
		 color: #000066;}
.Estilo14 {font-size: 16px}
.Estilo15 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;}
.EstiloNota {
	font-size: 10px;
	color: #f03535;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.td1 {font-family: Verdana, Helvetica, sans-serif; font-size: 8pt; color: #000066; vertical-align:center; text-align: left; }
.td2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt; color: #FFCC00; vertical-align:center; text-align: center; background-color: }
.td12 {font-family: Arial, Helvetica, sans-serif; font-size: 9pt; color: #000000; vertical-align:center; text-align: left; }

-->
</style>
</head>
<body>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
     <td align="left" class="pageName">Especialidades Farmac&eacute;uticas Aprobadas en Venezuela</td>
  </tr>
</table>
<br><br>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0"><tr><td>
<?php
}
?>

<!--ENCABEZADO DE FRAMES-->
<?php
function do_html_encabezado1(){
?>
<html>
<head>
	<script language="javascript" type="text/javascript">
    </script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 {
	font-size: 10px;
	color: #006699;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000066;
}
-->
</style>
</head>
<body>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0"><tr><td>
<?php
}
?>

<!--PIE DE PAGINA DEL SISTEMA-->
<?php
function do_html_pie(){
?>
	</td></tr></table>
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
