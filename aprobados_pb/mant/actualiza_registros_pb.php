<html>
<head>
</head>
<body>
<?php
include "sisconexion.php";
$sql1 = "SELECT * FROM pbtmp";
$tablatmp = mysql_query($sql1,$sisconexion);
if(mysql_num_rows($tablatmp)>0){
	$c1=0;
	$c2=0;
	While($campo = mysql_fetch_object($tablatmp)){
		$nrs=$campo->nrs;
		$producto=$campo->producto;
		$dci=$campo->dci;
		$titular=$campo->titular;
		$fabricante=$campo->fabricante;
		$representante=$campo->representante;
		$patrocinante=$campo->patrocinante;
		$f_desicion=$campo->f_desicion;
		$estatus=$campo->estatus;
		$publicar=$campo->publicar;
		$usuario=$campo->usuario;
		$ingreso=$campo->ingreso;
		$sql2 = "SELECT * FROM pb WHERE pb.nrs='$nrs'";
		$tabla1 = mysql_query($sql2,$sisconexion);
		if(mysql_num_rows($tabla1)>0){
			$sql3 = "UPDATE pb SET pb.producto = '$producto', pb.dci = '$dci', pb.titular = '$titular', pb.fabricante = '$fabricante', pb.representante = '$representante', pb.patrocinante = '$patrocinante', pb.f_desicion = '$f_desicion', pb.estatus = '$estatus', pb.publicar = '$publicar', pb.modifpor = '$usuario', pb.ultimamodif = '$ingreso' WHERE pb.nrs = '$nrs'";
			$modificado = mysql_query($sql3,$sisconexion);
			$c1++;
		}else{
			$sql4 = "INSERT INTO pb (pb.nrs, pb.producto, pb.dci, pb.titular, pb.fabricante, pb.representante, pb.patrocinante, pb.f_desicion, pb.estatus, pb.publicar, pb.usuario, pb.ingreso) VALUES ('$nrs', '$producto', '$dci', '$titular', '$fabricante', '$representante', '$patrocinante', '$f_desicion', '$estatus', '$publicar', '$usuario', '$ingreso')";
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