<?
    mysql_connect("172.16.0.10","acruz","10485");
	require_once('varias_fns.php');
	do_html_encabezado('');
?> 

<script language="JavaScript">
function muestra(queCosa)
{google.co.ve/
    alert(queCosa);
}
function CargarURL(url) { var m='�Cargar Url\nmediante JavaScript?'; if(confirm(m)) { location.href=url; } }
</script>
<p>&nbsp;</p>
<p><strong>Instrucci&oacute;n:</strong>&nbsp; Coloque en la casilla T&eacute;rmino de B&uacute;squeda el N&uacute;mero del Protocolo asignado por el I.N.H.R.R. o<br /> una palabra clave que contenga el T&iacute;tulo del Protocolo o el Nombre del Patrocinador y luego hacer clic en el bot&oacute;n Buscar.</p>
<form action="consulta1.php" method="post">
T&eacute;rmino de B&uacute;squeda:
<input type="text" name="criterio" size="40" maxlength="150">&nbsp;
<input type="image" name="boton_submit" src="imagenes/buscar.gif" alt="Buscar">&nbsp;Buscar
</form>
<table width="100%" border="0" cellpadding="0" cellspacing="1">
<tr bgcolor="#0d3692"><td align="center" colspan="6" class="Estilo11">RESULTADO DE SU CONSULTA</td></tr>
</table>
<br>
<?
//inicializo el criterio y recibo cualquier cadena que se desee buscar
$criterio = "";
$txt_criterio = "";
//if ($_GET["criterio"]!=""){
if ($_POST["criterio"]!=""){
   //$txt_criterio = $_GET["criterio"];
   $txt_criterio = $_POST["criterio"];
   $criterio = " where numero like '%" . $txt_criterio . "%' or year like '%" . $txt_criterio . "%' or titulo like '%" . $txt_criterio . "%' or estatus like '%" . $txt_criterio . "%' or entidad like '%" . $txt_criterio . "%'";
}

mysql_query ("SET NAMES 'utf8'");
$sql="SELECT * FROM bdryc.vprotocolo_ef ".$criterio;
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros<=0)
{
    echo "<div align='center'>";
    echo "<font face='verdana' size='-2'>No se encontraron resultados</font>";
    echo "</div>";
}else{
    //////////elementos para el orden
    if(!isset($orden))
    {
       $orden="numero";
    }
    //////////fin elementos de orden

    //////////calculo de elementos necesarios para paginacion
    //tamaño de la pagina
    //$tamPag=5;
	$tamPag=10;

    //pagina actual si no esta definida y limites
    if(!isset($_GET["pagina"]))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $pagina = $_GET["pagina"];
    }
    //calculo del limite inferior
    $limitInf=($pagina-1)*$tamPag;

    //calculo del numero de paginas
    $numPags=ceil($numeroRegistros/$tamPag);
    if(!isset($pagina))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $seccionActual=intval(($pagina-1)/$tamPag);
       $inicio=($seccionActual*$tamPag)+1;

       if($pagina<$numPags)
       {
          $final=$inicio+$tamPag-1;
       }else{
          $final=$numPags;
       }

       if ($final>$numPags){
          $final=$numPags;
       }
    }

//////////fin de dicho calculo

//////////creacion de la consulta con limites
$sql="SELECT * FROM bdryc.vprotocolo_ef ".$criterio." ORDER BY ".$orden.",numero ASC LIMIT ".$limitInf.",".$tamPag;
$res=mysql_query($sql);

//////////fin consulta con limites
echo "<div align='center'>";
echo "<font face='verdana' size='-2'>encontrados ".$numeroRegistros." resultados<br>";
echo "ordenados por <b>".$orden."</b>";
if(isset($txt_criterio)){
    echo "<br>Valor filtro: <b>".$txt_criterio."</b>";
}
echo "</font></div>";
echo "<table align='center' width='100%' border='0' cellspacing='1' cellpadding='0'>";
echo "<tr><td colspan='6'><hr noshade></td></tr>";
echo "<th class='Estilo9' bgcolor='#0D3692'>NUMERO</th>";
echo "<th class='Estilo9' bgcolor='#0D3692'>FASE</th>";
echo "<th class='Estilo9' bgcolor='#0D3692'>TITULO</th>";
echo "<th class='Estilo9' bgcolor='#0D3692'>ESTATUS</th>";
echo "<th class='Estilo9' bgcolor='#0D3692'>PATROCINADOR</th>";
echo "<th class='Estilo9' bgcolor='#0D3692'>VER DETALLE</th>";
while($registro=mysql_fetch_array($res))
{
?>
   <!-- tabla de resultados -->
   <!--
    <tr bgcolor="#C0DFFD" onMouseOver="this.style.backgroundColor='#CCCCCC';this.style.cursor='hand';" onMouseOut="this.style.backgroundColor='#C0DFFD'"o"];" onClick="javascript:muestra('<? //echo "[".$registro["numero"]."] ".$registro["titulo"]." - ".$registro["estatus"]; ?>');">
	 -->
	  <!--<a href="protocolo.php?cod=<? //echo $registro['numero']; ?>" target="contenido"> -->
	 <tr bgcolor="#C0DFFD" onMouseOver="this.style.backgroundColor='#CCCCCC';this.style.cursor='hand';" onMouseOut="this.style.backgroundColor='#C0DFFD'"o"];" onclick=" ">
    <td width="10%" class="Estilo13" align="center"><? echo $registro["numero"]; ?></td>
	<td width="10%" class="Estilo13" align="center"><? echo $registro["fase"]; ?></td>
    <td width="40%" class="Estilo13"><? echo $registro["titulo"]; ?></td>
    <td width="20%" class="Estilo13" align="center"><? echo $registro["estatus"]; ?></td>
	<td width="20%" class="Estilo13" align="center"><? echo $registro["entidad"]; ?></td>
	<td width="10%" class="Estilo13" align="center"><a href="protocolo.php?cod=<? echo $registro['numero']; ?>" target="contenido"><img src="imagenes/edita.gif" width="16" height="16" border="0" /></a></td>
    </tr>
	 <!--</a> -->
   <!-- fin tabla resultados -->
<?
}//fin while
echo "</table>";
}//fin if
//////////a partir de aqui viene la paginacion
?>
    <br>
    <table border="0" cellspacing="0" cellpadding="0" align="center">
    <tr><td align="center" valign="top">
<?
    if($pagina>1)
    {
       echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>anterior</font>";
       echo "</a> ";
    }

    for($i=$inicio;$i<=$final;$i++)
    {
       if($i==$pagina)
       {
          echo "<font face='verdana' size='-2'><b>".$i."</b> </font>";
       }else{
          echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&orden=".$orden."&criterio=".$txt_criterio."'>";
          echo "<font face='verdana' size='-2'>".$i."</font></a> ";
       }
    }
    if($pagina<$numPags)
   {
       echo " <a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>siguiente</font></a>";
   }
//////////fin de la paginacion
?>
    </td></tr>
    </table>
<hr noshade style="color:C0DFFD;height:1px">
<div align="center"><font face="verdana" size="-2"><a class="p" href="consulta.php">Inicio</a></font></div>

<?
	do_html_pie();
    mysql_close();
?> 