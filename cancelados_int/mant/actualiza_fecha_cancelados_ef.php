<html>
<head>
</head>
<body>
<?php
include "sisconexion.php";
$sql1 = "SELECT * FROM ef_cance_tmp ORDER BY nrs ASC";
$tablatmp = mysql_query($sql1,$sisconexion);
if(mysql_num_rows($tablatmp)>0){
	$c1=0;
	While($campo = mysql_fetch_object($tablatmp)){
		$nrs=$campo->nrs;
		$producto=$campo->producto;
		$concentracion=$campo->codigo_cancelacion;
		$f_cancelacion=$campo->f_cancelacion;
		$sql3 = "UPDATE ef_cancelados SET ef_cancelados.f_cancelacion = '$f_cancelacion' WHERE ef_cancelados.nrs = '$nrs'";
		$modificado = mysql_query($sql3,$sisconexion);
		$c1++;
	}
	echo 'REGISTROS MODIFICADOS '.$c1.'<br>';
}
?>
</body>
</html>