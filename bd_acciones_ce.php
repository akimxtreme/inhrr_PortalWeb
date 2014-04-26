<?php
session_start();
?>

<?php

include "conexion_ce.php";
	
$privilegio = $_SESSION['privilegio'];

if($privilegio =='0'){// <<---sesion inicio
	

// Variables: Botones de cada uno de los formularios
$agrega_alerta=$_POST['agrega_alerta'];
isset($agrega_alerta);

// Agregar Alertas
function agrega_alerta()  {
				$seccion=$_POST['seccion'];
				$tipo_alerta=$_POST['tipo_alerta'];
				$ambito=$_POST['ambito'];
				$ambito_otro="Nacional";
				if($seccion!="AS"){
					$ambito=$ambito_otro;
					}
				$fecha=$_POST['fecha'];
				$fecha_4= substr ($fecha, 6); // Extrae los ultimos 4 (cuatro), caracteres de la variable fecha
				$numero=$_POST['numero'];				
				$titulo=$_POST['titulo'];
				$fecha=$_POST['fecha'];
				$nro_registro_sanitario=$_POST['nro_registro_sanitario'];
				$lote=$_POST['lote'];
				//  <<--- Comandos para ejecutar correctamente las validaciones del file  INICIO...>>
				$uploaddir = "pdf/rc_pdf/pdf_ce/"; // ruta donde se almacenada el archivo.
 				$adjunto = $_FILES['file']['name']; // nombre del archivo que se subirá  (Ej: nombre_archivo.pdf)
 				$nvo_nombre = $adjunto; // declaro $nvo_nombre para conservar $adjunto 
 				$extension = end(explode('.',$adjunto)); //saca la extension sin el punto(Ej:"pdf"), el end() es para agarrar el ultimo punto en caso d q el nombre contenga mas de 1 punto 
				$extension = strtolower($extension); 
 				$onlyName = substr($adjunto,0,strlen($adjunto)-(strlen($extension)+1)); //saca el nombre del archivo sin la extensión (Ej:"nombre_archivo") 
				$nombre_completo_adjunto= $numero . "-" . $fecha_4 . "-" . $seccion;
 				$nvo_nombre = $nombre_completo_adjunto . "." . $extension;  // Armando el nombre completo del archivo (Ej: archivo.pdf)
 				$uploadFile = $uploaddir.$nvo_nombre; 
 				
 				$error = $_FILES['file']['error'];
 				$subido = false;
 					if(isset($_POST['agrega_alerta']) && $error==UPLOAD_ERR_OK) { 
   
   						$subido = move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);  
 					 } 
   					if($subido) { 
    					?><script>alert("El archivo subio con exito");</script><?
	
					}else {
    					echo "Se ha producido un error: ".$error;
  					}// <<... Validaciones del file FIN --->>
				
				$principal= '<html><head><meta http-equiv="REFRESH" content="0; url=agregar_alerta_ce.php"></head></html>';
				$mensaje_exitoso="<script>alert('Alerta Agregada de manera Exitosa')s</script>";
				include "conexion_ce.php";
				
				if($nro_registro_sanitario!=''){
				$sql = "INSERT INTO alertas (seccion, ambito, fecha, numero, titulo, nro_registro_sanitario, adjunto) VALUE ('$seccion', '$ambito', '$fecha', '$numero', '$titulo', '$nro_registro_sanitario', '$nvo_nombre')";
				$ingreso=mysql_query($sql,$conexion);
				echo $principal;	
				echo $mensaje_exitoso;
				
				}
				
				if($lote!=''){
				$sql = "INSERT INTO alertas (seccion, ambito, fecha, numero, titulo, lote, adjunto) VALUE ('$seccion', '$ambito', '$fecha', '$numero', '$titulo', '$lote', '$nvo_nombre')";
				$ingreso=mysql_query($sql,$conexion);
				
				echo $principal;	
				echo $mensaje_exitoso;
					}
				if($tipo_alerta!='Seleccione...'){
				$sql = "INSERT INTO alertas (seccion, ambito, fecha, numero, titulo, tipo_alerta, adjunto) VALUE ('$seccion', '$ambito', '$fecha', '$numero', '$titulo', '$tipo_alerta', '$nvo_nombre')";
				$ingreso=mysql_query($sql,$conexion);
				
				echo $principal;	
				echo $mensaje_exitoso;			
					}
			
		
				
		} // funcion agrega_alerta --->> llave de Cierre
if ($agrega_alerta == 'agrega'){
	agrega_alerta();
	}
	
	
				
				


	





}// sesion fin--->>
else {
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce_acceso.php"></head></html>';break;
	}



 
?>
