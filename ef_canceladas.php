<?php include_once('funciones/plantillaMaestra.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temas.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
include_once('funciones/plantillaMaestra.php');
include_once('funciones.php');
linkGlobal();
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Portal Web del Instituto Nacional de Higiene Rafael Rangel - Especialidades Farmacéuticas Canceladas</title>




<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<?php
metaGoogle();
?>        
</head>
<body>	
<!-- CONTENEDOR -->
<div id="contenedor">
	<?php
	tamanioLetra();
	cintilloGobierno();
	encabezado_MenuBanner();
	?>
<!-- InstanceBeginEditable name="slideshow" --><!-- InstanceEndEditable -->
	<?php
	menuSuperior();
	menuPrincipal();
	?>

<!-- InstanceBeginEditable name="contenido" -->
<!-- Contenedor -->
<script language="JavaScript">
//Con este sencillo código JavaScript, ajustamos la altura del iframe al tamaño de la página en el contenido, de ese modo, evitaremos el molesto scroll lateral.
            //Ajusta el tamaño de un iframe al de su contenido interior para evitar scroll
            function autofitIframe(id){
                if (!window.opera && document.all && document.getElementById){
                    id.style.height=id.contentWindow.document.body.scrollHeight;
                } else if(document.getElementById) {
                    id.style.height=id.contentDocument.body.scrollHeight+"px";
                }
            }
        </script>
<script language="javascript" type="text/javascript">
function textodeiframe()
{

var frame = document.getElementById('miFrame');
var txt = frame.contentWindow.document.getElementById('textarea2').value;
alert (txt);
document.getElementById('texto').value = txt;

}
</script> 
<div class="contenedor_0">
<div class="seccion_4">
<h1 class="contenedor_0">Especialidades Farmacéuticas Canceladas</h1>
<iframe name="frame" id="miFrame" src="http://190.202.114.149/ef/cancelados_int/" width="100%" height="600" style="border:none; margin:0px; padding:0px;" frameborder="1" transparency="transparency" onload="autofitIframe(this);"></iframe>

<!--
<iframe name="frame" id="miFrame" src="http://190.202.114.146:7474/ef/cancelados_int/" width="100%" height="600" style="border:none; margin:0px; padding:0px;" frameborder="1" transparency="transparency" onload="autofitIframe(this);"></iframe>
<iframe name="frame" id="miFrame" src="cancelados_int/index.php" width="100%" height="0" style="border:none; margin:0px; padding:0px;" frameborder="1" transparency="transparency" onload="autofitIframe(this);"></iframe>-->


</div>
</div>



<!-- InstanceEndEditable -->
	<?php
	piePagina();
	?>
</div>
<!-- CONTENEDOR - FIN -->
</body>
<!-- InstanceEnd --></html>