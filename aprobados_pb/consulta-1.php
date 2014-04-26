<?php
require_once('varias_fns.php');
do_html_encabezado1('');
	$n=$_GET['n'];
	include ('cxbdpb.php');
	$sql1="SELECT * FROM pb WHERE nrs='$n'";
	$consulta=mysql_query($sql1,$cxpb);
	if(mysql_error()){
		die("ERROR INGRESANDO A LA BASE DE DATOS");
	}
	if(mysql_num_rows($consulta)>0){
		$campo=mysql_fetch_object($consulta);
		$num=$campo->nrs;
		$nom=utf8_encode($campo->producto);
		$gen=utf8_encode($campo->dci);
		$tit=$campo->titular;
		$fab=$campo->fabricante;
		$rep=$campo->representante;
		$pat=$campo->patrocinante;
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
		<tr bgcolor="#003399"><td bgcolor="#003399" colspan="2" align="center" class="td2"><strong>DETALLE DEL PRODUCTO</strong></td>
		</tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">REGISTRO SANITARIO</td><td class="Estilo13"><?php echo $num;?></td></tr>
		<tr><td bgcolor="#99CCFF" class="Estilo1">PRODUCTO</td>
		<td bgcolor="#99CCFF" class="Estilo13"><?php echo $nom;?></td>
		</tr>
		<tr bgcolor="#FFFFFF">
		  <td height="23" class="Estilo1">NOMBRE GENERICO </td>
		  <td class="Estilo13"><?php echo $gen;?></td></tr>
		<tr><td bgcolor="#99CCFF" class="Estilo1">TITULAR</td>
		<td bgcolor="#99CCFF" class="Estilo13"><?php echo $tit;?></td>
		</tr>
        <tr bgcolor="#FFFFFF"><td class="Estilo1">FABRICANTE</td><td class="Estilo13"><?php echo $fab;?></td></tr>
		<tr><td bgcolor="#99CCFF" class="Estilo1">REPRESENTANTE</td>
		<td bgcolor="#99CCFF" class="Estilo13"><?php echo $rep;?></td>
		</tr>
		<tr bgcolor="#FFFFFF"><td class="Estilo1">PATROCINANTE</td><td class="Estilo13"><?php echo $pat;?></td></tr>
		<tr><td bgcolor="#99CCFF" class="Estilo1">FECHA APROBACION</td>
		<td bgcolor="#99CCFF" class="Estilo13"><?php echo $fde;?></td>
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