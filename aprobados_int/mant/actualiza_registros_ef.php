<html>
<head>
</head>
<body>
<?php
include "sisconexion.php";
$sql1 = "SELECT * FROM eftmp";
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
		$titular=$campo->titular;
		$fabricante=$campo->fabricante;
		$representante=$campo->representante;
		$patrocinante=$campo->patrocinante;
		$f_desicion=$campo->f_desicion;
		$estatus=$campo->estatus;
		$publicar=$campo->publicar;
		$usuario=$campo->usuario;
		$ingreso=$campo->ingreso;
		$sql2 = "SELECT * FROM ef WHERE ef.nrs='$nrs'";
		$tabla1 = mysql_query($sql2,$sisconexion);
		if(mysql_num_rows($tabla1)>0){
			$sql3 = "UPDATE ef SET ef.producto = '$producto',  ef.concentracion = '$concentracion', ef.forma_farmaceutica = '$forma_farmaceutica', ef.dci = '$dci', ef.titular = '$titular', ef.fabricante = '$fabricante', ef.representante = '$representante', ef.patrocinante = '$patrocinante', ef.f_desicion = '$f_desicion', ef.estatus = '$estatus', ef.publicar = '$publicar', ef.modifpor = '$usuario', ef.ultimamodif = '$ingreso' WHERE ef.nrs = '$nrs'";
			$modificado = mysql_query($sql3,$sisconexion);
			$c1++;
		}else{
			$sql4 = "INSERT INTO ef (ef.nrs, ef.producto, ef.concentracion, ef.forma_farmaceutica, ef.dci, ef.titular, ef.fabricante, ef.representante, ef.patrocinante, ef.f_desicion, ef.estatus, ef.publicar, ef.usuario, ef.ingreso) VALUES ('$nrs', '$producto', '$concentracion', '$forma_farmaceutica', '$dci', '$titular', '$fabricante', '$representante', '$patrocinante', '$f_desicion', '$estatus', '$publicar', '$usuario', '$ingreso')";
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