<?php
require_once('varias_fns.php');
do_html_encabezado1('');
	$n=$_GET['n'];
	include ('conexion.php');
	$sql1="SELECT * FROM informacion WHERE tema='$n'";
	$consulta=mysql_query($sql1,$cxpb);
	if(mysql_error()){
		die("Sistema en Mantenimiento - Disculpe las Molestias");
		
	}
	if(mysql_num_rows($consulta)>0){
		$campo=mysql_fetch_object($consulta);
		$tema=utf8_encode($campo->tema);
		$titulo1=utf8_encode($campo->titulo1);
		$contenido1=utf8_encode($campo->contenido1);
		
		$titulo2=utf8_encode($campo->titulo2);
		$contenido2=utf8_encode($campo->contenido2);
		
		$titulo3=utf8_encode($campo->titulo3);
		$contenido3=utf8_encode($campo->contenido3);
		
		$titulo4=utf8_encode($campo->titulo4);
		$contenido4=utf8_encode($campo->contenido4);
		
		$titulo5=utf8_encode($campo->titulo5);
		$contenido5=utf8_encode($campo->contenido5);
		
?>
<style type="text/css">

body {
	background-color: none;
	font-family:'Arial';
}
div.seccion_6 {
	float:left;
	width: 98%;
	height:auto;
	margin: 4px 0px 0px 5px;
	background:#E5E5E5;
	border:#CCC solid 1px;
	border-radius:8px;
	-moz-border-radius: 8px;
	-webkit-border-radius : 8px;
	padding: 4px;
	font-family: Arial;
	}

div.cont1{
	float:left;
	width:100%;
	
	}
	table#ty{
		float:left;
		margin: 2px 2px 20px 2px;
		width: 90%;
		background:#090;}
		p{
			text-align:justify;
			width: 90%;
			}
h1.temas{
	font-size:18px;
	float:left;
	margin: 5px;
	padding:4px;
	background: #FFF;
	color: #005DAB;
	border:#005DAB solid 2px;
	border-radius: 4px;
	
	}
			
</style>
 <link href="css/global.css" rel="stylesheet" type="text/css" />
 <link href="css/organic.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src='js/jquery.min.js'></script>
    <script src="js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            
    
        });
    </script>
<!-- Contenido -->
<div class="seccion_6">
<h1 class="temas"><?php echo $tema;?></h1>
	<div id="page-wrap">
	<div id="example-one">
   	<ul id="nav1" class="nav">
                <li class="nav-uno"><a href="#1" class="current"><?php echo $titulo1;?></a></li>
                <?php
					if ($titulo2!=""){
						echo "<li class='nav-dos'>"."<a href='#2'>". $titulo2 . "</a></li>";
						}
					if ($titulo3!=""){
						echo "<li class='nav-tres'>"."<a href='#3'>". $titulo3 . "</a></li>";
						}
					if ($titulo4!=""){
						echo "<li class='nav-cuatro'>"."<a href='#4'>". $titulo4 . "</a></li>";
						}
					if ($titulo5!=""){
						echo "<li class='nav-cinco'>"."<a href='#5'>". $titulo5 . "</a></li>";
						}
					
				
				?>
                
    </ul>
        	
        	<div class="list-wrap">
        	<!-- 1 PCR -->
        		<ul id="1">
                <h2 class="contenedor_0"><strong><?php echo $titulo1;?></strong></h2>
                <p><?php echo $contenido1;?></p>
        		                    

</ul>
        	<!-- 2 Serología Viral -->	 
        		 <ul id="2" class="hide">
                <h2 class="contenedor_0"><strong><?php echo $titulo2;?></strong></h2>                 
<p><?php echo $contenido2;?></p>
        		 </ul> 
			<!-- 3 Cultivo Viral -->        		 
       			 <ul id="3" class="hide">
                 <h2 class="contenedor_0"><strong><?php echo $titulo3;?></strong></h2>
                   <p><?php echo $contenido3;?></p>
        		 </ul>
        	<!-- 4 Pruebas Especiales -->   	 
        		 <ul id="4" class="hide">
                  <h2 class="contenedor_0"><strong><?php echo $titulo4;?></strong></h2>
        		    <p><?php echo $contenido4;?></p>         

        		 </ul>
            <!-- 5 Detección Directa - Virus -->       
                 <ul id="5" class="hide">
                <h2 class="contenedor_0"><strong><?php echo $titulo5;?></strong></h2>
<p><?php echo $contenido5;?></p>

        		 </ul>
                  		 
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
		
	
	</div>

</div>


		
<?php
	} else {
		do_error4();
    }
do_html_pie();
?>