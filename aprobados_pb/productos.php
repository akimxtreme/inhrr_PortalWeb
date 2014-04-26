<html>
<head>
<title>Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="antecedente.css" type="text/css" />
<style type="text/css">
<!--
.td12 {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; color: #000000;  vertical-align:center; text-align: left; }
a:link { color:#000099; text-decoration: none } a:visited { color:#FF6600; text-decoration: none } a:active { color:#0000FF; text-decoration: none }
a:hover {  color:#FFCC00; background-color:#005daa}
</style>
</head>
<body>
<form>
<table width="760">
<tr><td class="TD12">
<?php
$termbusca=$_POST['txtTermino'];
include ('cxbdpb.php');
$sql1="SELECT nrs, producto FROM pb WHERE (nrs LIKE '%".$termbusca."%') OR (producto LIKE '%".$termbusca."%') OR (dci LIKE '%".$termbusca."%') ORDER BY producto ASC";
$consulta=mysql_query($sql1,$cxpb);
if(mysql_error()){
	die("ERROR INGRESANDO A LA BASE DE DATOS");
}
if(mysql_num_rows($consulta)>0){
	while($campo=mysql_fetch_object($consulta)){
		$num=$campo->nrs;
		$nom=utf8_encode($campo->producto);
?>
		<li><A href="consulta-1.php?n=<?php echo $num;?>" target="contenido1"><?php echo $nom;?></a></li><br>
<?php
	}
}
?>
</td></tr></table>
</form>
</body>
</html>