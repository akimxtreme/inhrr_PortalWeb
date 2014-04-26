<html>
<head>
</head>
<body>
<?php
include "sisconexion.php";
$sql1 = "SELECT * FROM ef_cancelados_tmp";
$tablatmp = mysql_query($sql1,$sisconexion);
if(mysql_num_rows($tablatmp)>0){
	$c1=0;
	$c2=0;
	While($campo = mysql_fetch_object($tablatmp)){
		$nrs=$campo->nrs;
		$producto=$campo->producto;
		$concentracion=$campo->concentracion;
		$forma_farmaceutica=$campo->forma_farmaceutica;
		$dci=$campo->dci;
		$representante=$campo->representante;
		$f_cancelacion=$campo->f_cancelacion;
		$estatus=$campo->estatus;
		$publicar=$campo->publicar;
		$usuario=$campo->usuario;
		$ingreso=$campo->ingreso;
		$sql2 = "SELECT * FROM ef_cancelados WHERE ef_cancelados.nrs='$nrs'";
		$tabla1 = mysql_query($sql2,$sisconexion);
		if(mysql_num_rows($tabla1)>0){
			$sql3 = "UPDATE ef_cancelados SET ef_cancelados.producto = '$producto', ef_cancelados.concentracion = '$concentracion', ef_cancelados.forma_farmaceutica = '$forma_farmaceutica', ef_cancelados.dci = '$dci', ef_cancelados.representante = '$representante', ef_cancelados.f_cancelacion = '$f_cancelacion', ef_cancelados.publicar = '$publicar', ef_cancelados.modifpor = '$usuario', ef_cancelados.ultimamodif = '$ingreso' WHERE ef_cancelados.nrs = '$nrs'";
			$modificado = mysql_query($sql3,$sisconexion);
			$c1++;
		}else{
			$sql4 = "INSERT INTO ef_cancelados (ef_cancelados.nrs, ef_cancelados.producto, ef_cancelados.concentracion, ef_cancelados.forma_farmaceutica, ef_cancelados.dci, ef_cancelados.representante, ef_cancelados.f_cancelacion, ef_cancelados.estatus, ef_cancelados.publicar, ef_cancelados.usuario, ef_cancelados.ingreso) VALUES ('$nrs', '$producto', '$concentracion', '$forma_farmaceutica', '$dci', '$representante', '$f_cancelacion', '$estatus', '$publicar', '$usuario', '$ingreso')";
			$ingresado = mysql_query($sql4,$sisconexion);
			$c2++;	
		}
	}
	echo 'REGISTROS MODIFICADOS '.$c1.'<br>';
	echo 'REGISTROS INGRESADOS '.$c2.'<br>';
}
?>
</body>
</html>