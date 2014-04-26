<?php
require_once('varias_fns.php');
do_html_encabezado('');
$hoy=date('d/m/Y');
$hora=date('H:i:s');
$Numero = $_GET['cod'];
$conector=ConectarBD();
mysql_query ("SET NAMES 'utf8'");
$sql="SELECT * FROM bdryc.ef_protocoloclinico WHERE numero = '$Numero'";
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros>0){
	$registro=mysql_fetch_array($res);
?>
<p>&nbsp;<br /></p>
<table width="740" border="0" cellspacing="0" cellpadding="0" bgcolor="#C0E3F8" align="center">
<tr bgcolor="#0d3692" height="30">
  <td colspan="4" align="right" class="Estilo11">DETALLE DEL PROTOCOLO CLINICO&nbsp;</td>
</tr>
<tr height="30">
  <td colspan="4" align="right" class="Estilo11">&nbsp;</td>
  </tr>
  <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">&nbsp;<strong>N&uacute;mero</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC"><?php echo $registro["numero"];?></td>
	<td width="20">&nbsp;</td>
  </tr>
    <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;<strong>A&ntilde;o</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">
	<?php echo $registro["year"];?></td>
	<td width="20">&nbsp;</td>
  </tr>
  <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">&nbsp;<strong>T&iacute;tulo</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC"><?php echo $registro["titulo"];?><br /><br /></td>
	<td width="20">&nbsp;</td>
  </tr>
  <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;<strong>Duraci&oacute;n</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF"><?php echo $registro["duracion"];?></td>
	<td width="20">&nbsp;</td>
  </tr>
    <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">&nbsp;<strong>N&uacute;mero de Pacientes</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">
	<?php echo $registro["nro_pacientes"];?></td>
	<td width="20">&nbsp;</td>
  </tr>
   <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
	<td colspan="2" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">
	<table width="720" border="1" cellspacing="0" cellpadding="0">
	<tr><td width="360" class="Estilo17" valign="top" align="left">&nbsp;<strong>Centro</strong></td>
	<td width="360" class="Estilo17" valign="top" align="left"><strong>Investigador Principal</strong></td></tr>
	<?php
	$sql1="SELECT numero, cod_centro, cod_invppal FROM ef_procli_ctroinv WHERE numero='$Numero'";
	$consulta1=EjecuteExec($conector,$sql1) or die($sql1);
	if(NumFila($consulta1)>0){
		while($fila1=ObtenerFila($consulta1)){
			$codctro=$fila1[1];
			$centro=BuscarCentro($codctro);
			$codinv=$fila1[2];
			$investigador=BuscarInvestigador($codinv);
	?>
	<tr><td width="320" class="Estilo17" valign="top" align="left">&nbsp;<?php echo $centro; ?></td>
	<td width="220" class="Estilo17" valign="top" align="left"><?php echo $investigador; ?></td></tr>
	<?php
		}
	}
	?>
	</table>
	<br />

   </td>
	<td width="20">&nbsp;</td>
  </tr>
  <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">&nbsp;<strong>Fecha Aprobaci&oacute;n</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">
	<?php
	$fecha1=$registro["fecha_aprobacion"];
	$fecha1=ArreglarFecha($fecha1);
	echo $fecha1;
	?>
	</td>
	<td width="20">&nbsp;</td>
    </tr>
    <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;<strong>Estatus</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#FFFFFF">
	<?php
	$sql3="SELECT codigo, estatus FROM ef_procli_estatus ORDER BY estatus ASC";
	$conulta3=EjecuteExec($conector,$sql3) or die($sql3);
	if(NumFila($conulta3)>0){
		$cod_est=$registro["cod_estatus"];
		while($fila3=ObtenerFila($conulta3)){
			if($cod_est == $fila3[0]):
				echo $fila3[1];
			endif;
		}
	}
	?>
	</td>
	<td width="20">&nbsp;</td>
  </tr>
  <tr height="30" valign="bottom">
  	<td width="20">&nbsp;</td>
    <td width="180" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">&nbsp;<strong>Patrocinador</strong></td>
	<td width="520" class="Estilo17" align="left" valign="top" bgcolor="#CCCCCC">
	<?php
	$c_ent1=trim($registro["cod_entidad"]);
	if($c_ent1!=''){
	$cod3 = explode(",",$c_ent1);
	for($c3 = 0, $l3 = count($cod3); $c3 < $l3; ++$c3){
		$codigo3 = $cod3[$c3];
		$sql5="SELECT codigo, entidad FROM ef_procli_patrocinantes WHERE codigo='$codigo3'";
		$consulta5=EjecuteExec($conector,$sql5) or die($sql5);
		if(NumFila($consulta5)>0){
			$fila5=ObtenerFila($consulta5);
			echo $fila5[1].'<br>';
		}
	}
	}
	?>
	<br />
   </td>
	<td width="20">&nbsp;</td>
  <tr height="30">
  <td colspan="4" align="right" class="Estilo11">&nbsp;</td>
  </tr>
  <tr bgcolor="#0d3692">
  <td width="20">&nbsp;</td>
  <td colspan="2" align="right" height="30" class="Estilo9" valign="middle">
  <a href="javascript:history.back(1)" class="ord"><img src="imagenes/arrowleft.gif" width="16" height="16" border="0">&nbsp;REGRESAR</a>
  &nbsp;
  <!--
  <a href="reportes/protocolo_clinico.php?cod=<? //echo $registro["numero"]; ?>" class="ord" target="_blank"><img src="imagenes/imprime.gif" width="16" height="16" border="0" alt="Imprimir">&nbsp;IMPRIMIR</a>
  -->
  </td>
  <td width="20">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<?php
}
do_html_pie();
?>