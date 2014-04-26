<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Procesar curriculum en linea</title>
<link href="css/estilos_cv.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css">
<script type="text/javascript" src="js/scripts_cv.js"></script>
<script type="text/javascript" src="tcal.js"></script> 
</head>
<?php
include "conexion.php";

// Creación de Variables
//Datos Básicos
$nombre = $_POST['nombre'];
$nacionalidad = $_POST['nacionalidad'];
$cedula = $_POST['cedula'];
$date = $_POST['date'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$pais_nacimiento = $_POST['pais_nacimiento'];
$correo = $_POST['correo'];
$p_vehiculo = $_POST['p_vehiculo'];
$p_licencia = $_POST['p_licencia'];
$telefono_habitacion = $_POST['telefono_habitacion'];
$telefono_movil = $_POST['telefono_movil'];
$direccion = utf8_decode ($_POST['direccion']);

//Datos Académicos
//n°1
$nivel = $_POST['nivel'];
$titulo = $_POST['titulo'];
$carrera = $_POST['carrera'];
$instituto = $_POST['instituto'];
$pais = $_POST['pais'];
$anio_egreso = $_POST['anio_egreso'];
//n°2
$nivel_2 = $_POST['nivel_2'];
$titulo_2 = $_POST['titulo_2'];
$carrera_2 = $_POST['carrera_2'];
$instituto_2 = $_POST['instituto_2'];
$pais_2 = $_POST['pais_2'];
$anio_egreso_2 = $_POST['anio_egreso_2'];

//Datos Laborales
//n°1
$cargo = $_POST['cargo'];
$empresa = $_POST['empresa'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$l_pais = $_POST['l_pais'];
$funciones = $_POST['funciones'];
//n°2
$cargo_2 = $_POST['cargo_2'];
$empresa_2 = $_POST['empresa_2'];
$fecha_inicio_2 = $_POST['fecha_inicio_2'];
$fecha_fin_2 = $_POST['fecha_fin_2'];
$l_pais_2 = $_POST['l_pais_2'];
$funciones_2 = $_POST['funciones_2'];

//Cursos
//N°1
$nombre_curso = $_POST['nombre_curso'];
$instituto_curso = $_POST['instituto_curso'];
$pais_curso = $_POST['pais_curso'];
$anio_egreso_curso = $_POST['anio_egreso_curso'];
$horas_cursadas = $_POST['horas_cursadas'];
//N°2
$nombre_curso_2 = $_POST['nombre_curso_2'];
$instituto_curso_2 = $_POST['instituto_curso_2'];
$pais_curso_2 = $_POST['pais_curso_2'];
$anio_egreso_curso_2 = $_POST['anio_egreso_curso_2'];
$horas_cursadas_2 = $_POST['horas_cursadas_2'];

//Datos: Referencias Personales
//N°1
$nombre_ref = $_POST['nombre_ref'];
$telefono_ref = $_POST['telefono_ref'];
$relacion_ref = $_POST['relacion_ref'];
//N°2
$nombre_ref_2 = $_POST['nombre_ref_2'];
$telefono_ref_2 = $_POST['telefono_ref_2'];
$relacion_ref_2 = $_POST['relacion_ref_2'];

//Conocimientos
$habilidades = $_POST['habilidades'];
$ingles_oral = $_POST['ingles_oral'];
$ingles_lectura = $_POST['ingles_lectura'];
$ingles_escrito = $_POST['ingles_escrito'];


// PROBANDO
/*
echo $nombre;
echo '--';
echo $nacionalidad;
echo '--';
echo $cedula;
echo '--';
echo $date;
echo '--';
echo $genero;
echo '--';
echo $estado_civil;
echo '--';
echo $pais_nacimiento;
echo '--';
echo $correo;
echo '--';
echo $p_vehiculo;
echo '--';
echo $p_licencia;
echo '--';
echo $telefono_habitacion;
echo '--';
echo $telefono_movil;
echo '--';
echo $direccion;
echo '--';
echo $nivel;
echo '--';
echo $titulo;
echo '--';
echo $carrera;
echo '--';
echo $instituto;
echo '--';
echo $pais;
echo '--';
echo $anio_egreso;
echo '--';
echo $nivel_2;
echo '--';
echo $titulo_2;
echo '--';
echo $carrera_2;
echo '--';
echo $instituto_2;
echo '--';
echo $pais_2;
echo '--';
echo $anio_egreso_2;
echo '--';
echo $cargo;
echo '--';
echo $empresa;
echo '--';
echo $fecha_inicio;
echo '--';
echo $fecha_fin;
echo '--';
echo $l_pais;
echo '--';
echo $funciones;
echo '--';
echo $cargo_2;
echo '--';
echo $empresa_2;
echo '--';
echo $fecha_inicio_2;
echo '--';
echo $fecha_fin_2;
echo '--';
echo $l_pais_2;
echo '--';
echo $funciones_2;
echo '--';
echo $nombre_ref;
echo '--';
echo $telefono_ref;
echo '--';
echo $relacion_ref;
echo '--';
echo $nombre_ref_2;
echo '--';
echo $telefono_ref_2;
echo '--';
echo $relacion_ref_2;
echo '--';
echo $habilidades;
echo '--';
echo $ingles_oral;
echo '--';
echo $ingles_lectura;
echo '--';
echo $ingles_escrito;
echo '--';
*/

	//Validando si está Registrada la Cédula
	
	$sql = "SELECT * FROM datos_basicos WHERE cedula='$cedula'";
	$q=mysql_query($sql,$conexion);
		$cont=mysql_num_rows($q);
		if($cont>=1){ 
			?><script>alert("Cédula ya utilizada en el Sistema");</script><?
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv.php"></head></html>';
		}else {

	// Almacenando Los Datos Básicos
	$sql="INSERT INTO datos_basicos  (nombre,nacionalidad,cedula,fecha_nacimiento,genero,estado_civil,pais_nacimiento,correo,p_vehiculo,p_licencia,telefono_habitacion,telefono_movil,direccion) VALUE ('$nombre','$nacionalidad','$cedula','$date','$genero','$estado_civil','$pais_nacimiento','$correo','$p_vehiculo','$p_licencia','$telefono_habitacion','$telefono_movil','$direccion')";
			$ingreso=mysql_query($sql,$conexion);
	// Almacenando Los Datos Académicos
	$sql2="INSERT INTO estudios  (cedula,nivel,titulo,carrera,instituto,pais,anio_egreso,nivel_2,titulo_2,carrera_2,instituto_2,pais_2,anio_egreso_2) VALUE ('$cedula','$nivel','$titulo','$carrera','$instituto','$pais','$anio_egreso','$nivel_2','$titulo_2','$carrera_2','$instituto_2','$pais_2','$anio_egreso_2')";
			$ingreso=mysql_query($sql2,$conexion);
// Almacenando Los Datos Laborales
	$sql3="INSERT INTO datos_laborales  (cedula,cargo,empresa,fecha_inicio,fecha_fin,l_pais,funciones,cargo_2,empresa_2,fecha_inicio_2,fecha_fin_2,l_pais_2,funciones_2) VALUE ('$cedula','$cargo','$empresa','$fecha_inicio','$fecha_fin','$l_pais','$funciones','$cargo_2','$empresa_2','$fecha_inicio_2','$fecha_fin_2','$l_pais_2','$funciones_2')";
			$ingreso=mysql_query($sql3,$conexion);
// Almacenando Los Referencias Personales
	$sql4="INSERT INTO referencias  (cedula,nombre_ref,telefono_ref,relacion_ref,nombre_ref_2,telefono_ref_2,relacion_ref_2) VALUE ('$cedula','$nombre_ref','$telefono_ref','$relacion_ref','$nombre_ref_2','$telefono_ref_2','$relacion_ref_2')";
			$ingreso=mysql_query($sql4,$conexion);
// Almacenando Las Habilidades
	$sql5="INSERT INTO conocimientos  (cedula,habilidades,ingles_oral,ingles_lectura,ingles_escrito) VALUE ('$cedula','$habilidades','$ingles_oral','$ingles_lectura','$ingles_escrito')";
			$ingreso=mysql_query($sql5,$conexion);
// Almacenando Los Cursos Realizados
	$sql6="INSERT INTO cursos  (cedula,nombre_curso,instituto_curso,pais_curso,anio_egreso_curso,horas_cursadas,nombre_curso_2,instituto_curso_2,pais_curso_2,anio_egreso_curso_2,horas_cursadas_2) VALUE ('$cedula','$nombre_curso','$instituto_curso','$pais_curso','$anio_egreso_curso','$horas_cursadas','$nombre_curso_2','$instituto_curso_2','$pais_curso_2','$anio_egreso_curso_2','$horas_cursadas_2')";
			$ingreso=mysql_query($sql6,$conexion);

			?><script>alert("Datos enviados exitosamente");</script><?
			echo '<html><head><meta http-equiv="REFRESH" content="0; url=cv.php"></head></html>';
		}
		
	
?>
