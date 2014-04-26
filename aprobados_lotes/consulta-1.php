<?php
require_once('varias_fns.php');
do_html_encabezado1('');
	$n=$_GET['n'];
	$l=$_GET['l'];
	include ('cxbdpb.php');
	$sql1="SELECT * FROM lotes WHERE nrs='$n' AND lote='$l'";
	$consulta=mysql_query($sql1,$cxpb);
	if(mysql_error()){
		die("ERROR INGRESANDO A LA BASE DE DATOS");
	}
	if(mysql_num_rows($consulta)>0){
		$campo=mysql_fetch_object($consulta);
		$cod1=$campo->cod1;
		$num=$campo->nrs;
		$lote=$campo->lote;
		$nom=trim($campo->producto);
		$nom=utf8_encode($nom);
		$gen=trim($campo->dci);
		$gen=utf8_encode($gen);
		$fab=$campo->fabricante;
		$rep=$campo->representante;
		$pat=trim($campo->patrocinante);
		$pat=utf8_encode($pat);
		$fde=$campo->f_desicion;
		$fde=ArreglarFecha($fde);
		$est=$campo->estatus;
?>
<style type="text/css">
<!--
body {
	background-color: #c0dffd;
}
.td2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt; color: #FFCC00; vertical-align:center; text-align: center; background-color: }
-->
</style>
		<table width="600" align="center">
		<tr bgcolor="#003399"><td bgcolor="#003399" colspan="2" align="center" class="td2"><strong>DETALLE DE LA LIBERACI&Oacute;N DEL LOTE DEL PRODUCTO</strong></td>
		</tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">REGISTRO SANITARIO</td><td class="Estilo13">
		<?php echo $cod1,' ',$num;?></td></tr>
		<tr bgcolor="#99CCFF"><td class="Estilo1">NUMERO DE LOTE</td><td class="Estilo13">
		<?php echo $lote;?></td></tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">PRODUCTO</td>
		<td class="Estilo13"><?php echo $nom;?></td></tr>
		<tr bgcolor="#99CCFF"><td height="23" class="Estilo1">NOMBRE GENERICO </td>
		<td class="Estilo13"><?php echo $gen;?></td></tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">FABRICANTE</td><td class="Estilo13"><?php echo $fab;?></td></tr>
		<tr bgcolor="#99CCFF"><td class="Estilo1">REPRESENTANTE</td>
		<td class="Estilo13"><?php echo $rep;?></td>
		</tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">PATROCINANTE</td><td class="Estilo13"><?php echo $pat;?></td></tr>
		<tr bgcolor="#99CCFF"><td class="Estilo1">FECHA LIBERACION</td>
		<td class="Estilo13"><?php echo $fde;?></td>
		</tr>
		<!--
		<tr bgcolor="#FFFFFF"><td class="Estilo1">ESTATUS</td><td class="Estilo13"><?php// echo $est;?></td></tr>
		-->
		</table>
<?php
	} else {
		do_error4();
    }
do_html_pie();
?>