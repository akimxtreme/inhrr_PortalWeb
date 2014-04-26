<?php
require_once('varias_fns.php');
do_html_encabezado('');
?>
<style type="text/css">
<!--

input.campo{
	float:left;
	white-space: 20px;
	background: #CCC;
	border-radius: 4px;
	padding: 3px;
	margin: 3px;
	border: #CCC solid 1px;
	font-size:10px;
	color:#000;
	font-weight:bold;
	}
	
		td{
			border:none;}
</style>
<table width="935" border="1" bordercolor="#333333" align="center" >
<tr>
<td>
<?php
	include ('p2-1.php');
?>
	<form action="productos.php" name="form1" method="post" target="contenido1">
		<input class="campo" name="txtTermino"type="text" maxlength="150">
		<input type="image" name="boton_submit" src="buscar.gif" alt="Buscar">Buscar 
    </form>

</td>
</tr>
<tr>
<td>

    </td></tr>
  	<tr><td colspan="2" >
    <iframe width="935" id=con name=contenido1 marginWidth=0 marginHeight=0 src="presentacion-1.php" frameBorder=0 height=1500 scrolling="index">
    </iframe>
    &nbsp;</td></tr>
</table>
<?php
do_html_pie();
?>