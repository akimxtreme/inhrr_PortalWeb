<html>
<head>
<title>Productos</title>
<style type="text/css">
<!--

div {
	float:left;
	background: #005DAB;
	border-radius: 4px;
	padding: 3px;
	margin: 3px;
	}
A{
	color:#FFF;}
a:link 
{color: #FFF; 
text-decoration: none } 
a:visited { color:#FFC00; text-decoration: none } a:active { color:#FFCC00; text-decoration: none }
a:hover {  color: #005DAB; border-radius: 30px; background:#FFF000;}
</style>
</head>
<body>

<div>
<?php
include ('conexion.php');
$sql1="SELECT * FROM abecedario";
$abc=mysql_query($sql1,$cxpb);
if(mysql_error()){
	die("Sistema en Mantenimiento - Disculpe las Molestias");
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
</div>
</body>
</html>