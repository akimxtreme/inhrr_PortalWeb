<?
    require_once('varias_fns.php');
	do_html_encabezado('');
?> 
<p>&nbsp;</p>
<p><strong>Instrucci&oacute;n:</strong>&nbsp; Coloque en la casilla T&eacute;rmino de B&uacute;squeda el N&uacute;umero del Protocolo asignado por el I.N.H.R.R. o<br /> una palabra clave que contenga el T&iacute;tulo o el Nombre del Patrocinador y luego clic en el bot&oacute;n Buscar.</p>
<form action="consulta1.php" method="post">
T&eacute;rmino de B&uacute;squeda:
<input type="text" name="criterio" size="40" maxlength="150">&nbsp;
<input type="image" name="boton_submit" src="imagenes/buscar.gif" alt="Buscar">&nbsp;Buscar
</form>
<p>&nbsp;</p>
<table width="780" border="0" align="left" cellpadding="0" cellspacing="0">
	<tr><td colspan="2" align="left" class="pageName"><br />Documentos de Lectura Obligatoria<br />
	</td></tr>
	<tr><td width="770" class="bodyText" align="left">
		<p>Para descargar los Documentos debe hacer clic sobre cada uno de los t&iacute;tulos.</p>
		<table width="770" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr bgcolor="#0d3692">
		<td width="770" class="Estilo11" align="center">TITULO DEL DOCUMENTO</td>
		</tr>
		<tr bgcolor="#CCCCCC">
		<td class="bodyText" align="left" valign="top">
		&nbsp;&nbsp;<a href="pdf/Reglamento_Investigacion_FC.pdf" target="_blank">Reglamento de Investigaci&oacute;n Farmacolog&iacute;a Cl&iacute;nica</a>
		&nbsp;I.N.H.R.R.</td></tr>
		<tr bgcolor="#FFFFFF">
		<td class="bodyText" align="left" valign="top">
		&nbsp;&nbsp;<a href="pdf/BPC_DA.pdf" target="_blank">Buenas Pr&aacute;cticas Cl&iacute;nicas: Documento de las Am&eacute;ricas</a>
		&nbsp;O.P.S. - O.M.S. - Red Panamericana A.R.F.
		</td>
		</tr>
		<tr bgcolor="#CCCCCC">
		<td class="bodyText" align="left" valign="top">
		&nbsp;&nbsp;<a href="pdf/DHAMM.pdf" target="_blank">Declaraci&oacute;n de Helsinki de la Asociaci&oacute;n M&eacute;dica Mundial</a>
		&nbsp;Asamblea M&eacute;dica Mundial
		</td>
		</tr>
		
		<tr bgcolor="#FFFFFF">
		<td class="bodyText" align="left" valign="top">
		&nbsp;&nbsp;<a href="pdf/PEI_IBSH.pdf" target="_blank">Pautas Eticas Internacionales para la Investigaci&oacute;n Biom&eacute;dica en Seres Humanos</a>
		&nbsp;C.I.O.M.S. - O.M.S.
		</td></tr>
		<tr bgcolor="#CCCCCC">
		<td class="bodyText" align="left" valign="top">
		&nbsp;&nbsp;<a href="pdf/NBPC.pdf" target="_blank">Normas de Buenas Pr&aacute;cticas Cl&iacute;nicas (BPC)</a>
		&nbsp;C.I.A.R.M.</td>
		</tr>
		</table>
		<p>&nbsp;<br /></p>
		
	</td>
	<td width="10">&nbsp;<br /> </td>
	</tr>
	</table>
<?
	do_html_pie();
?> 