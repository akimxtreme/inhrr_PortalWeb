<?php
include_once('conexion/conexion.php');
$sql = "SELECT * FROM tabla_inhrr";
/*$result = mysql_query($sql,$conexion);
	while ($row = mysql_fetch_row($result))
	{
	echo "<p>$row[0]</p> \n";
	echo "<h2>$row[1]</h2> \n";
	}*/
$seleccion=mysql_query($sql,$conexion);
		while ($row = mysql_fetch_row($seleccion)){
				echo $row[0];
				echo $row[1];
				echo "<br>";
		}
mysql_close ($conexion);
?>