<?php
require_once('varias_fns.php');

?>
<table width="450" border="0" align="center">

	<td class="bodyText" align="left" width="320">
    <form action="productos.php" name="form1" method="post" target="contenido1">
    <input name="txtTermino" type="text" size="40" maxlength="50" style="font-size:9px">
    <input type="image" name="boton_submit" src="buscar.gif" alt="Buscar">
    Buscar 
    </form>
	</td></tr>
  	<tr><td colspan="2">
<?php
	include ('p2-1.php');
?>
    &nbsp;</td></tr>
  	<tr><td colspan="2">
    <IFRAME id=con name=contenido1 marginWidth=0 marginHeight=0 src="presentacion-1.php" frameBorder=0 width=750 height=500 scrolling="index">
    </IFRAME>
    &nbsp;</td></tr>
</table>
<?php
do_html_pie();
?>