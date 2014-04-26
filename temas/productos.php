<html>
<head>
<title>Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="antecedente.css" type="text/css" />
<style type="text/css">
<!--
.td12 {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; color: #000000;  vertical-align:center; text-align: left; }
a.consulta{
	color: #333;
	text-decoration: none;	}
a.consulta:visited{}
a.consulta:hover{
	text-decoration:underline;
	}
a.consulta:active{}
</style>
</head>
<body>
<form>
<table width="760">
<tr><td class="TD12">
<?php
$termbusca=$_POST['txtTermino'];
include ('conexion.php');
$sql1="SELECT tema FROM informacion WHERE (tema LIKE '%".$termbusca."%') ORDER BY tema ASC";
$consulta=mysql_query($sql1,$cxpb);
if(mysql_error()){
	die("ERROR INGRESANDO A LA BASE DE DATOS");
}
if(mysql_num_rows($consulta)>0){
	while($campo=mysql_fetch_object($consulta)){
		$tema=$campo->tema;
		?>
        <li><a class="consulta" href="consulta-1.php?n=<?php echo $tema;?>" target="contenido1"><?php echo $tema;?></a></li><br>
<?php
	}
}
?>
</td></tr></table>
</form>
</body>
</html>