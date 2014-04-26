// JavaScript Document

//validando que todos los campos del formulario del CV estan correctos
function global_pedir_cta(elemento){
	validado=true;
	if(document.getElementById('nombre').value=="" || document.getElementById('cedula').value=="" ||document.getElementById("date").value=="" || document.getElementById("genero").value=="" || document.getElementById("genero").value=="Seleccione..." || document.getElementById("estado_civil").value=="" || document.getElementById("estado_civil").value=="Seleccione..." ||document.getElementById("pais_nacimiento").value=="" ||document.getElementById("pais_nacimiento").value=="Seleccione..." ||document.getElementById("correo").value=="" || document.getElementById('p_vehiculo').value=="" || document.getElementById('p_vehiculo').value=="Seleccione..." || document.getElementById('p_licencia').value=="" || document.getElementById('p_licencia').value=="Seleccione..." || document.getElementById('telefono_habitacion').value=="" || document.getElementById('telefono_movil').value=="" || document.getElementById('direccion').value=="" || document.getElementById('nivel').value=="Seleccione..." || document.getElementById('nivel').value=="" || document.getElementById('carrera').value=="" || document.getElementById('instituto').value=="" || document.getElementById('titulo').value=="" || document.getElementById('pais').value=="" || document.getElementById('anio_egreso').value=="" || document.getElementById('nivel_2').value=="Seleccione..." || document.getElementById('nivel_2').value=="" || document.getElementById('titulo_2').value=="" || document.getElementById('carrera_2').value=="" || document.getElementById('instituto_2').value=="" || document.getElementById('pais_2').value=="" || document.getElementById('anio_egreso_2').value=="" || document.getElementById('cargo').value=="" || document.getElementById('empresa').value=="" || document.getElementById('fecha_inicio').value=="" || document.getElementById('fecha_fin').value=="" || document.getElementById('l_pais').value=="" || document.getElementById('funciones').value=="" || document.getElementById('cargo_2').value=="" || document.getElementById('empresa_2').value=="" || document.getElementById('fecha_inicio_2').value=="" || document.getElementById('fecha_fin_2').value=="" || document.getElementById('l_pais_2').value=="" || document.getElementById('funciones_2').value=="" || document.getElementById('nombre_curso').value=="" || document.getElementById('instituto_curso').value=="" || document.getElementById('pais_curso').value=="" || document.getElementById('anio_egreso_curso').value=="" || document.getElementById('horas_cursadas').value=="" || document.getElementById('nombre_curso_2').value=="" || document.getElementById('instituto_curso_2').value=="" || document.getElementById('pais_curso_2').value=="" || document.getElementById('anio_egreso_curso_2').value=="" || document.getElementById('horas_cursadas_2').value=="" || document.getElementById('nombre_ref').value=="" || document.getElementById('telefono_ref').value=="" || document.getElementById('relacion_ref').value=="" || document.getElementById('nombre_ref_2').value=="" || document.getElementById('telefono_ref_2').value=="" || document.getElementById('relacion_ref_2').value=="" || document.getElementById('habilidades').value=="" || document.getElementById('ingles_oral').value=="" || document.getElementById('ingles_oral').value=="Seleccione..." || document.getElementById('ingles_lectura').value=="" || document.getElementById('ingles_lectura').value=="Seleccione..." || document.getElementById('ingles_escrito').value=="" || document.getElementById('ingles_escrito').value=="Seleccione..." ){
		validado = false;
	}
	if(!document.getElementById("venezolano").checked & !document.getElementById("extranjero").checked){
		validado = false;
		}
		
	if (!validado){
		alert ("Falta ingresar algunos datos");
	}
	return validado;
}
/* Acceso al Sistema */	
function global_acceso(elemento){
	validado=true;
	if(document.getElementById('usuario').value==""){
		validado = false;
		document.getElementById("obligatorio_usuario").style.visibility='visible';
		}
	if(document.getElementById('clave').value==""){
		validado = false;
		document.getElementById("obligatorio_clave").style.visibility='visible';
		}
	if (!validado){
		alert ("usuario y/o clave incorrecto");
	}
	return validado;	
}
function acceso_obligatorio(elemento){
	if(!document.getElementById('usuario').value==""){
		document.getElementById("obligatorio_usuario").style.visibility='collapse';
		}
	if(!document.getElementById('clave').value==""){
		document.getElementById("obligatorio_clave").style.visibility='collapse';
		}
	}
							   
/* Script que guia al usuario al llenar correctamente los campos obligatorios */							   
function revisarObligatorio (elemento) {
	/*nombre*/
	if(elemento.name=="nombre"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nombre").style.visibility='visible';
			}else {
			document.getElementById("obligatorio_nombre").style.visibility='collapse';	
				}
			}
	/*cedula*/
	if(elemento.name=="cedula"){
		if(elemento.value==""){
			document.getElementById("obligatorio_cedula").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_cedula").style.visibility='collapse';
				}
			}
	if(!document.getElementById("venezolano").checked & !document.getElementById("extranjero").checked){
		document.getElementById("obligatorio_cedula").style.visibility='visible';		
		}
	/*date*/
	if(elemento.name=="date"){
		if(elemento.value==""){
			document.getElementById("obligatorio_date").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_date").style.visibility='collapse';
				}
			}
	/*genero*/
	if(elemento.name=="genero"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_genero").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_genero").style.visibility='collapse';
				}
			}
	/*estado_civil*/
	if(elemento.name=="estado_civil"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_estado_civil").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_estado_civil").style.visibility='collapse';
			
				}
			}
	/*pais_nacimiento*/
	if(elemento.name=="pais_nacimiento"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_pais_nacimiento").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_pais_nacimiento").style.visibility='collapse';
			
				}
			}
	/*p_vehiculo*/
	if(elemento.name=="p_vehiculo"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_p_vehiculo").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_p_vehiculo").style.visibility='collapse';
				}
			}
	/*p_licencia*/		
	if(elemento.name=="p_licencia"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_p_licencia").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_p_licencia").style.visibility='collapse';
				}
			}
	/*telefono_habitacion*/			
	if(elemento.name=="telefono_habitacion"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono_habitacion").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_telefono_habitacion").style.visibility='collapse';
				}
			}
	/*telefono_movil*/				
	if(elemento.name=="telefono_movil"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono_movil").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_telefono_movil").style.visibility='collapse';
			
				}
			}
	/*direccion*/				
	if(elemento.name=="direccion"){
		if(elemento.value==""){
			document.getElementById("obligatorio_direccion").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_direccion").style.visibility='collapse';
			
				}
			}
	/*nivel*/				
	if(elemento.name=="nivel"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_nivel").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_nivel").style.visibility='collapse';
			
				}
			}
	/*titulo*/				
	if(elemento.name=="titulo"){
		if(elemento.value==""){
			document.getElementById("obligatorio_titulo").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_titulo").style.visibility='collapse';
			
				}
			}		
	/*carrera*/		
	if(elemento.name=="carrera"){
		if(elemento.value==""){
			document.getElementById("obligatorio_carrera").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_carrera").style.visibility='collapse';
			
				}
			}
	/*instituto*/			
	if(elemento.name=="instituto"){
		if(elemento.value==""){
			document.getElementById("obligatorio_instituto").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_instituto").style.visibility='collapse';
			
				}
			}
	/*pais*/			
	if(elemento.name=="pais"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pais").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_pais").style.visibility='collapse';
			
				}
			}
	/*anio_egreso*/		
	if(elemento.name=="anio_egreso"){
		if(elemento.value==""){
			document.getElementById("obligatorio_anio_egreso").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_anio_egreso").style.visibility='collapse';
			
				}
			}
	/*nivel_2*/			
	if(elemento.name=="nivel_2"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_nivel_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_nivel_2").style.visibility='collapse';
			
				}
			}
	/*titulo_2*/		
	if(elemento.name=="titulo_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_titulo_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_titulo_2").style.visibility='collapse';
			
				}
			}	
	/*carrera_2*/		
	if(elemento.name=="carrera_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_carrera_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_carrera_2").style.visibility='collapse';
			
				}
			}
	/*instituto_2*/			
	if(elemento.name=="instituto_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_instituto_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_instituto_2").style.visibility='collapse';
			
				}
			}
	/*pais_2*/			
	if(elemento.name=="pais_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pais_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_pais_2").style.visibility='collapse';
			
				}
			}
	/*anio_egreso_2*/		
	if(elemento.name=="anio_egreso_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_anio_egreso_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_anio_egreso_2").style.visibility='collapse';
			
				}
			}
	/*cargo*/		
	if(elemento.name=="cargo"){
		if(elemento.value==""){
			document.getElementById("obligatorio_cargo").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_cargo").style.visibility='collapse';
			
				}
			}
	/*empresa*/		
	if(elemento.name=="empresa"){
		if(elemento.value==""){
			document.getElementById("obligatorio_empresa").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_empresa").style.visibility='collapse';
			
				}
			}
	/*fecha_inicio*/		
	if(elemento.name=="fecha_inicio"){
		if(elemento.value==""){
			document.getElementById("obligatorio_fecha_inicio").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_fecha_inicio").style.visibility='collapse';
			
				}
			}
	/*fecha_fin*/		
	if(elemento.name=="fecha_fin"){
		if(elemento.value==""){
			document.getElementById("obligatorio_fecha_fin").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_fecha_fin").style.visibility='collapse';
			
				}
			}
	/*l_pais*/		
	if(elemento.name=="l_pais"){
		if(elemento.value==""){
			document.getElementById("obligatorio_l_pais").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_l_pais").style.visibility='collapse';
				}
			}
	/*funciones*/		
	if(elemento.name=="funciones"){
		if(elemento.value==""){
			document.getElementById("obligatorio_funciones").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_funciones").style.visibility='collapse';
			
				}
			}
	/*cargo_2*/		
	if(elemento.name=="cargo_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_cargo_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_cargo_2").style.visibility='collapse';
			
				}
			}
	/*empresa_2*/		
	if(elemento.name=="empresa_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_empresa_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_empresa_2").style.visibility='collapse';
			
				}
			}
	/*fecha_inicio_2*/		
	if(elemento.name=="fecha_inicio_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_fecha_inicio_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_fecha_inicio_2").style.visibility='collapse';
			
				}
			}
	/*fecha_fin_2*/		
	if(elemento.name=="fecha_fin_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_fecha_fin_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_fecha_fin_2").style.visibility='collapse';
			
				}
			}
	/*l_pais_2*/		
	if(elemento.name=="l_pais_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_l_pais_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_l_pais_2").style.visibility='collapse';
			
				}
			}
	/*funciones_2*/		
	if(elemento.name=="funciones_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_funciones_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_funciones_2").style.visibility='collapse';
			
				}
			}
		// CURSOS
	/*nombre_curso*/		
	if(elemento.name=="nombre_curso"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nombre_curso").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_nombre_curso").style.visibility='collapse';
			
				}
			}
	/*instituto_curso*/		
	if(elemento.name=="instituto_curso"){
		if(elemento.value==""){
			document.getElementById("obligatorio_instituto_curso").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_instituto_curso").style.visibility='collapse';
				}
			}
	/*pais_curso*/		
	if(elemento.name=="pais_curso"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pais_curso").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_pais_curso").style.visibility='collapse';
			
				}
			}
	/*anio_egreso_curso*/		
	if(elemento.name=="anio_egreso_curso"){
		if(elemento.value==""){
			document.getElementById("obligatorio_anio_egreso_curso").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_anio_egreso_curso").style.visibility='collapse';
			
				}
			}
	/*horas_cursadas*/		
	if(elemento.name=="horas_cursadas"){
		if(elemento.value==""){
			document.getElementById("obligatorio_horas_cursadas").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_horas_cursadas").style.visibility='collapse';
			
				}
			}
	/*nombre_curso_2*/	
	if(elemento.name=="nombre_curso_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nombre_curso_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_nombre_curso_2").style.visibility='collapse';
			
				}
			}
	/*instituto_curso_2*/		
	if(elemento.name=="instituto_curso_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_instituto_curso_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_instituto_curso_2").style.visibility='collapse';
			
				}
			}
	/*pais_curso_2*/		
	if(elemento.name=="pais_curso_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_pais_curso_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_pais_curso_2").style.visibility='collapse';
			
				}
			}
	/*anio_egreso_curso_2*/	
	if(elemento.name=="anio_egreso_curso_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_anio_egreso_curso_2").style.visibility='visible';
		
			}else {
				document.getElementById("obligatorio_anio_egreso_curso_2").style.visibility='collapse';
			
				}
			}
	/*horas_cursadas_2*/	
	if(elemento.name=="horas_cursadas_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_horas_cursadas_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_horas_cursadas_2").style.visibility='collapse';
			
				}
			}
	/*nombre_ref*/
	if(elemento.name=="nombre_ref"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nombre_ref").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_nombre_ref").style.visibility='collapse';
				}
			}
	/*telefono_ref*/			
	if(elemento.name=="telefono_ref"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono_ref").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_telefono_ref").style.visibility='collapse';
			
				}
			}
	/*relacion_ref*/		
	if(elemento.name=="relacion_ref"){
		if(elemento.value==""){
			document.getElementById("obligatorio_relacion_ref").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_relacion_ref").style.visibility='collapse';
			
				}
			}
	/*nombre_ref_2*/		
	if(elemento.name=="nombre_ref_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_nombre_ref_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_nombre_ref_2").style.visibility='collapse';
			
				}
			}
	/*telefono_ref_2*/		
	if(elemento.name=="telefono_ref_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_telefono_ref_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_telefono_ref_2").style.visibility='collapse';
			
				}
			}
	/*relacion_ref_2*/		
	if(elemento.name=="relacion_ref_2"){
		if(elemento.value==""){
			document.getElementById("obligatorio_relacion_ref_2").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_relacion_ref_2").style.visibility='collapse';
			
				}
			}
	/*habilidades*/		
	if(elemento.name=="habilidades"){
		if(elemento.value==""){
			document.getElementById("obligatorio_habilidades").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_habilidades").style.visibility='collapse';
			
				}
			}
	/*ingles_oral*/	
	if(elemento.name=="ingles_oral"){
		if(elemento.value=="" || elemento.value=="Seleccione..." ){
			document.getElementById("obligatorio_ingles_oral").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_ingles_oral").style.visibility='collapse';
			
				}
			}
	/*ingles_lectura*/		
	if(elemento.name=="ingles_lectura"){
		if(elemento.value=="" || elemento.value=="Seleccione..." ){
			document.getElementById("obligatorio_ingles_lectura").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_ingles_lectura").style.visibility='collapse';
			
				}
			}
	/*ingles_escrito*/	
	if(elemento.name=="ingles_escrito"){
		if(elemento.value=="" || elemento.value=="Seleccione..." ){
			document.getElementById("obligatorio_ingles_escrito").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_ingles_escrito").style.visibility='collapse';
			
				}
			}
}
	/* Validaciones Control de Expedientes */
	function revisarObligatorio_2(elemento){
	/*ce_nombre_completo*/
	if(elemento.name=="ce_nombre_completo"){
		if(elemento.value==""){
			document.getElementById("obligatorio_ce_nombre_completo").style.visibility='visible';
			}else {
			document.getElementById("obligatorio_ce_nombre_completo").style.visibility='collapse';	
				}
			}
	/*ce_cedula*/
	if(elemento.name=="ce_cedula"){
		if(elemento.value==""){
			document.getElementById("obligatorio_ce_cedula").style.visibility='visible';
			}else {
				document.getElementById("obligatorio_ce_cedula").style.visibility='collapse';
				}
			}
	if(!document.getElementById("ce_venezolano").checked & !document.getElementById("ce_extranjero").checked){
		document.getElementById("obligatorio_ce_cedula").style.visibility='visible';		
		}
	/*ce_departamento*/
	if(elemento.name=="ce_departamento"){
		if(elemento.value=="" || elemento.value=="Seleccione..."){
			document.getElementById("obligatorio_ce_departamento").style.visibility='visible';
			
			}else {
				document.getElementById("obligatorio_ce_departamento").style.visibility='collapse';
				}
			}
	/*cod_carnet*/
	if(elemento.name=="cod_carnet"){
		if(elemento.value==""){
			document.getElementById("obligatorio_cod_carnet").style.visibility='visible';
			}else {
			document.getElementById("obligatorio_cod_carnet").style.visibility='collapse';	
				}
			}
	/*st_cedula*/
	if(elemento.name=="st_cedula"){
	document.getElementById("obligatorio_st_cedula").style.visibility="collapse";
	}
	/*st_foto*/
	if(elemento.name=="st_foto"){
	document.getElementById("obligatorio_st_foto").style.visibility="collapse";
	}
	/*st_curriculum*/
	if(elemento.name=="st_curriculum"){
	document.getElementById("obligatorio_st_curriculum").style.visibility="collapse";
	}
	/*st_partida_nacimiento*/
	if(elemento.name=="st_partida_nacimiento"){
	document.getElementById("obligatorio_st_partida_nacimiento").style.visibility="collapse";
	}
	/*st_titulo_si*/
	if(document.getElementById('st_titulo_si').checked){
	document.getElementById("obligatorio_st_titulo").style.visibility="collapse";
	}
	/*st_titulo_no*/
	if(document.getElementById('st_titulo_no').checked){
	document.getElementById("obligatorio_st_titulo").style.visibility="collapse";
	}
	/*certificado_si*/
	if(document.getElementById('certificado_si').checked){
	document.getElementById("obligatorio_certificado").style.visibility="collapse";
	}
	/*certificado_no*/
	if(document.getElementById('certificado_no').checked){
	document.getElementById("obligatorio_certificado").style.visibility="collapse";
	}
	/*ce_reposo_si*/
	if(document.getElementById('ce_reposo_si').checked){
	document.getElementById("obligatorio_reposo").style.visibility="collapse";
	}
	/*ce_reposo_no*/
	if(document.getElementById('ce_reposo_no').checked){
	document.getElementById("obligatorio_reposo").style.visibility="collapse";
	}
	/*st_amonestaciones_si*/
	if(document.getElementById('st_amonestaciones_si').checked){
	document.getElementById("obligatorio_st_amonestaciones").style.visibility="collapse";
	}
	/*st_amonestaciones_no*/
	if(document.getElementById('st_amonestaciones_no').checked){
	document.getElementById("obligatorio_st_amonestaciones").style.visibility="collapse";
	}
	/*st_plan_servicio_si*/
	if(document.getElementById('st_plan_servicio_si').checked){
	document.getElementById("obligatorio_st_plan_servicio").style.visibility="collapse";
	}
	/*st_plan_servicio_no*/
	if(document.getElementById('st_plan_servicio_no').checked){
	document.getElementById("obligatorio_st_plan_servicio").style.visibility="collapse";
	}
	
}
	/* Validación del Formulario de Control de Expedientes */
	
	function expediente(elemento){
	validado=true;
	/* Datos Basicos */
	if(document.getElementById('ce_nombre_completo').value==""){
		document.getElementById("obligatorio_ce_nombre_completo").style.visibility='visible';
		validado=false;
		}
	if(document.getElementById('ce_cedula').value==""){
		document.getElementById("obligatorio_ce_cedula").style.visibility='visible';
		validado=false;
		}
	if(document.getElementById('ce_departamento').value=="" || document.getElementById('ce_departamento').value=="Seleccione..." ){
		document.getElementById("obligatorio_ce_departamento").style.visibility='visible';
		validado=false;
		}
	if(document.getElementById('cod_carnet').value==""){
	document.getElementById("obligatorio_cod_carnet").style.visibility='visible';
		validado=false;
		}
	if(!document.getElementById("ce_venezolano").checked & !document.getElementById("ce_extranjero").checked){
		document.getElementById("obligatorio_ce_cedula").style.visibility='visible';	
		validado = false;
		}
	/* Control de Expedientes */
	/*st_cedula*/
	if(!document.getElementById("st_cedula_si").checked & !document.getElementById("st_cedula_no").checked){
		document.getElementById("obligatorio_st_cedula").style.visibility='visible';	
		validado = false;
		}
	/*st_foto*/
	if(!document.getElementById("st_foto_si").checked & !document.getElementById("st_foto_no").checked){
		document.getElementById("obligatorio_st_foto").style.visibility='visible';	
		validado = false;
		}
	/*st_curriculum*/
	if(!document.getElementById("st_curriculum_si").checked & !document.getElementById("st_curriculum_no").checked){
		document.getElementById("obligatorio_st_curriculum").style.visibility='visible';	
		validado = false;
		}
	/*st_partida_nacimiento*/
	if(!document.getElementById("st_partida_nacimiento_si").checked & !document.getElementById("st_partida_nacimiento_no").checked){
		document.getElementById("obligatorio_st_partida_nacimiento").style.visibility='visible';	
		validado = false;
		}
	/*st_titulo_si   st_titulo_no */
	if(!document.getElementById("st_titulo_si").checked & !document.getElementById("st_titulo_no").checked){
		document.getElementById("obligatorio_st_titulo").style.visibility='visible';	
		validado = false;
		}
	/*certificado_si   certificado_no */
	if(!document.getElementById("certificado_si").checked & !document.getElementById("certificado_no").checked){
		document.getElementById("obligatorio_certificado").style.visibility='visible';	
		validado = false;
		}
	/*ce_reposo_si   ce_reposo_no */
	if(!document.getElementById("ce_reposo_si").checked & !document.getElementById("ce_reposo_no").checked){
		document.getElementById("obligatorio_reposo").style.visibility='visible';	
		validado = false;
		}
	/*st_amonestaciones_si   st_amonestaciones_no */
	if(!document.getElementById("st_amonestaciones_si").checked & !document.getElementById("st_amonestaciones_no").checked){
		document.getElementById("obligatorio_st_amonestaciones").style.visibility='visible';	
		validado = false;
		}
	/*st_plan_servicio_si   st_plan_servicio_no */
	if(!document.getElementById("st_plan_servicio_si").checked & !document.getElementById("st_plan_servicio_no").checked){
		document.getElementById("obligatorio_st_plan_servicio").style.visibility='visible';	
		validado = false;
		}
	
	
		
	if (!validado){
		alert ("Falta ingresar algunos datos");
		
	}
	
		return validado;
		
	}
	
/* Validacion de Email */
function revisarEmail(elemento){
	if (elemento.value!="")
		var dato = elemento.value;
		var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if (!expresion.test(dato)){
			if(elemento.name=="correo"){
			document.getElementById("obligatorio_correo").style.visibility='visible';
			validado = false;
			}
						
		}else {
			if(elemento.name=="correo"){
			document.getElementById("obligatorio_correo").style.visibility='collapse';
			}
						
			}
}

function llenar_campo(){
	validado=true;
	/* Datos Basicos */
	if(document.getElementById('valor').value==""){
		alert ('Debes ingresar algún dato');
		validado=false;
		}
	return validado;
	}
function cantidad(){
	if(document.getElementById("st_titulo_si").checked){
		document.getElementById('st_titulo').style.visibility='visible';
		document.getElementById('st_titulo').style.position='aboslute';
	}
	if(document.getElementById("st_titulo_no").checked){
		document.getElementById('st_titulo').style.visibility='hidden';
		document.getElementById('st_titulo').style.position='inherit';
	}
	if(document.getElementById("certificado_si").checked){
		document.getElementById('ce_certificado').style.visibility='visible';
		document.getElementById('ce_certificado').style.position='aboslute';
	}
	if(document.getElementById("certificado_no").checked){
		document.getElementById('ce_certificado').style.visibility='hidden';
		document.getElementById('ce_certificado').style.position='inherit';
	}
	if(document.getElementById("ce_reposo_si").checked){
		document.getElementById('ce_reposo').style.visibility='visible';
		document.getElementById('ce_reposo').style.position='aboslute';
	}
	if(document.getElementById("ce_reposo_no").checked){
		document.getElementById('ce_reposo').style.visibility='hidden';
		document.getElementById('ce_reposo').style.position='inherit';
	}
	if(document.getElementById("st_amonestaciones_si").checked){
		document.getElementById('st_amonestaciones').style.visibility='visible';
		document.getElementById('st_amonestaciones').style.position='aboslute';
	}
	if(document.getElementById("st_amonestaciones_no").checked){
		document.getElementById('st_amonestaciones').style.visibility='hidden';
		document.getElementById('st_amonestaciones').style.position='inherit';
	}
	
	}

function soloNumeros(evt)  
{  
    //Validar la existencia del objeto event  
    evt = (evt) ? evt : event;  
      
    //Extraer el codigo del caracter de uno de los diferentes grupos de codigos  
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));  
      
    //Predefinir como valido  
    var respuesta = true;  
      
    //Validar si el codigo corresponde a los NO aceptables  
    if (charCode > 31 && (charCode < 48 || charCode > 57))   
    {  
        //Asignar FALSE a la respuesta si es de los NO aceptables  
        respuesta = false;  
    }  
      
    //Regresar la respuesta  
    return respuesta;  
}  

function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = [8,37,39,46];

	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
	
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
     }

function validar_ce(elemento){
	validado=true;
	/* st_cedula */
	if(document.getElementById('st_cedula').value==""){
		document.getElementById("obligatorio_st_cedula").style.visibility='visible';
		validado=false;
		}
	/* st_foto */
	if(document.getElementById('st_foto').value==""){
		document.getElementById("obligatorio_st_foto").style.visibility='visible';
		validado=false;
		}
	/* st_curriculum */
	if(document.getElementById('st_curriculum').value==""){
		document.getElementById("obligatorio_st_curriculum").style.visibility='visible';
		validado=false;
		}
	/* st_partida_nacimiento */
	if(document.getElementById('st_partida_nacimiento').value==""){
		document.getElementById("obligatorio_st_partida_nacimiento").style.visibility='visible';
		validado=false;
		}
	/* st_titulo */
	if(document.getElementById('st_titulo').value==""){
		document.getElementById("obligatorio_st_titulo").style.visibility='visible';
		validado=false;
		}
	/* st_titulo_cantidad */
	if(document.getElementById('st_titulo').value=="si" & document.getElementById('st_titulo_cantidad').value==""){
			document.getElementById("obligatorio_st_titulo_cantidad").style.visibility='visible';
			validado=false;
		}
	/* st_certificado */
	if(document.getElementById('st_certificado').value==""){
		document.getElementById("obligatorio_st_certificado").style.visibility='visible';
		validado=false;
		}
	/* st_certificado_cantidad */
	if(document.getElementById('st_certificado').value=="si" & document.getElementById('st_certificado_cantidad').value==""){
			document.getElementById("obligatorio_st_certificado_cantidad").style.visibility='visible';
			validado=false;
		}
	/* st_reposo */
	if(document.getElementById('st_reposo').value==""){
		document.getElementById("obligatorio_st_reposo").style.visibility='visible';
		validado=false;
		}
	/* st_reposo_cantidad */
	if(document.getElementById('st_reposo').value=="si" & document.getElementById('st_reposo_cantidad').value==""){
			document.getElementById("obligatorio_st_reposo_cantidad").style.visibility='visible';
			validado=false;
		}
	/* st_amonestaciones */
	if(document.getElementById('st_amonestaciones').value==""){
		document.getElementById("obligatorio_st_amonestaciones").style.visibility='visible';
		validado=false;
		}
	/* st_amonestaciones_cantidad */
	if(document.getElementById('st_amonestaciones').value=="si" & document.getElementById('st_amonestaciones_cantidad').value==""){
			document.getElementById("obligatorio_st_amonestaciones_cantidad").style.visibility='visible';
			validado=false;
		}
	/* st_plan_servicio */
	if(document.getElementById('st_plan_servicio').value==""){
		document.getElementById("obligatorio_st_plan_servicio").style.visibility='visible';
		validado=false;
		}
	if (!validado){
		alert ("Falta ingresar algunos datos");
		
	}
	
		return validado;
		
		}


function validar_nva_ubicacion(elemento){
	validado=true;
	/* ubicacion_actual */
	if(document.getElementById('ubicacion_actual').value==""){
		document.getElementById("obligatorio_ubicacion_actual").style.visibility='visible';
		validado=false;
		}
	/* descripcion_actual */
	if(document.getElementById('descripcion_actual').value==""){
		document.getElementById("obligatorio_descripcion_actual").style.visibility='visible';
		validado=false;
		}
	
	if (!validado){
		alert ("Falta ingresar algunos datos");
		
	}
	
		return validado;
		
	}