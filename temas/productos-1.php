<html>
<head>
<title>Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
<!--
body{
	font-family:'Arial';
	}

form { width:928px; }
a#letra{
	width:auto;
	padding:10px;
	text-align:center;
	float:left;
	font-size: 24px;
	background: #333;
	margin: 10px;
	border-radius: 30px;
	color:#FF0;
	}
div{
	float:left;
	width: 100%;
	}
	table{
	float:left;
	}
li{
	margin: 5px;
	font-family:'Arial';
	font-size:12px;
	
	}
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
<?php
$l=$_GET['l'];
?>
<div>
<a id="letra" name="<?php echo $l;?>">
<?php echo $l;?>
</a>
</div>
<?php
include ('conexion.php');
$sql1="SELECT tema FROM informacion WHERE substr(tema,1,1)='$l' ORDER BY tema ASC";
$consulta=mysql_query($sql1,$cxpb);
if(mysql_error()){
	die("Sistema en Mantenimiento - Disculpe las Molestias");
	
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
</body>
</html>