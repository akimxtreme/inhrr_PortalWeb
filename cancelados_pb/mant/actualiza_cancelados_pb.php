<html>
<head>
</head>
<body>
<?php
include "sisconexion.php";
$sql1 = "SELECT * FROM pb_cancelados_tmp";
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
		$sql2 = "SELECT * FROM pb_cancelados WHERE pb_cancelados.nrs='$nrs'";
		$tabla1 = mysql_query($sql2,$sisconexion);
		if(mysql_num_rows($tabla1)>0){
			$sql3 = "UPDATE pb_cancelados SET pb_cancelados.producto = '$producto', pb_cancelados.concentracion = '$concentracion', pb_cancelados.forma_farmaceutica = '$forma_farmaceutica', pb_cancelados.dci = '$dci', pb_cancelados.representante = '$representante', pb_cancelados.f_cancelacion = '$f_cancelacion', pb_cancelados.publicar = '$publicar', pb_cancelados.modifpor = '$usuario', pb_cancelados.ultimamodif = '$ingreso' WHERE pb_cancelados.nrs = '$nrs'";
			$modificado = mysql_query($sql3,$sisconexion);
			$c1++;
		}else{
			$sql4 = "INSERT INTO pb_cancelados (pb_cancelados.nrs, pb_cancelados.producto, pb_cancelados.concentracion, pb_cancelados.forma_farmaceutica, pb_cancelados.dci, pb_cancelados.representante, pb_cancelados.f_cancelacion, pb_cancelados.estatus, pb_cancelados.publicar, pb_cancelados.usuario, pb_cancelados.ingreso) VALUES ('$nrs', '$producto', '$concentracion', '$forma_farmaceutica', '$dci', '$representante', '$f_cancelacion', '$estatus', '$publicar', '$usuario', '$ingreso')";
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