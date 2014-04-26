<html>
<head>
<title>Productos</title>
<style type="text/css">
<!--
.td2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt; color: #FFCC00; vertical-align:center; text-align: center; background-color: }
.td21 {  font-family:Arial, Helvetica, sans-serif; font-size: 11pt; color: #000099; vertical-align:center; text-align: left; background-color: }
a:link { color:#FFCC00; text-decoration: none } 
a:visited { color:#FFCC00; text-decoration: none } a:active { color:#FFCC00; text-decoration: none }
a:hover {  color:#FFFFFF; background-color:#FF6600}
</style>
</head>
<body>
<table width="760">
<tr><td class="TD21"><em>CONSULTA POR PRODUCTO</em></td></tr>
</table>
<table>
<tr><td background="imagenes/fondo2.gif" class="TD2" width="760" height="15">
<?php
include ('cxbdef.php');
$sql1="SELECT * FROM abecedario";
$abc=mysql_query($sql1,$cxef);
if(mysql_error()){
	die("ERROR INGRESANDO A LA BASE DE DATOS");
}
if(mysql_num_rows($abc)>0){
	while($campo=mysql_fetch_object($abc)){
		$l=$campo->letra;
?>
		<A HREF="productos-1.php?l=<?php echo $l; ?>" TARGET="contenido1">&nbsp;<?php echo $l; ?>&nbsp;</A>
<?php
	}
}
?>
</td></tr></table>
</body>
</html>