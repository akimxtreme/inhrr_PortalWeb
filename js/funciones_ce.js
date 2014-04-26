// JavaScript Document
var incorrecto_css="red solid 1px"; // Para valores incorrectos
var correcto_css="#CCC solid 1px"; // Para valores correctos	
/* Script que guia al usuario al llenar correctamente los campos obligatorios */
			   
function revisarObligatorio (elemento) {
	/*usuario*/
	if(elemento.name=="usuario"){
		if(elemento.value==""){
			elemento.style.border=incorrecto_css;
			}else {
			elemento.style.border=correcto_css;
				}
			}
	/*contrasenia*/
	if(elemento.name=="contrasenia"){
		if(elemento.value==""){
			elemento.style.border=incorrecto_css;
			}else {
			elemento.style.border=correcto_css;
				}
			}
	/*seccion*/
	if(elemento.name=="seccion"){
		if(elemento.value=="Seleccione..."){
			elemento.style.border=incorrecto_css;
			document.getElementById('tipo_alerta').border=correcto_css;
			document.getElementById('tipo_alerta').value="Seleccione...";
			document.getElementById('ambito').border=correcto_css;
			document.getElementById('ambito').value="Seleccione...";			
			}else {
			elemento.style.border=correcto_css;
				}
			}
	
	/*file*/
	if(elemento.name=="file"){
		var caracter = elemento.value;
		var fin_tres_caracteres = caracter.substr(-3, 3);
		if(fin_tres_caracteres !='pdf'){
			alert('Solo documentos con extension .pdf');
			elemento.style.color='red';
			}else {
			alert('Extension Correcta');
			elemento.style.color='green';
				}
			}

	
}

function ingreso(elemento){
	validado=true;
	/*nomb_host*/
	if(document.getElementById("usuario").value==""){
		validado = false;
		document.getElementById("usuario").style.border=incorrecto_css;
	}
	/*ingreso*/
	if(document.getElementById("contrasenia").value==""){
		validado = false;
		document.getElementById("contrasenia").style.border=incorrecto_css;
	}
	
	return validado;	
}

function ingreso_2(elemento){
	validado=true;
	/*file*/
	if(document.getElementById('file')){
		var caracter = document.getElementById('file').value;
		caracter = caracter.toLowerCase( ); 
		var fin_tres_caracteres = caracter.substr(-3, 3);
			if(fin_tres_caracteres !='pdf' || caracter =='Seleccione...'){
				validado = false;
				document.getElementById('adjunto').style.color='red';
				alert('Solo documentos con extension .pdf');
				}else {
					validado = true;
					document.getElementById('adjunto').style.color='#333';
					}
			
	}
	if(document.getElementById("seccion").value=="Seleccione..."){
		document.getElementById("seccion").style.border=incorrecto_css;
		validado = false;
		
	}
	if((document.getElementById("tipo_alerta").value=="Seleccione...") & (document.getElementById("seccion").value=="AS")){
		document.getElementById("tipo_alerta").style.border=incorrecto_css;
		validado = false;
		
	}
	if((document.getElementById("ambito").value=="Seleccione...") & (document.getElementById("seccion").value=="AS")){
		document.getElementById("ambito").style.border=incorrecto_css;
		validado = false;
		
	}
	if((document.getElementById("nro_registro_sanitario").value=="") & (document.getElementById("seccion").value=="AC")){
		document.getElementById("nro_registro_sanitario").style.border=incorrecto_css;
		validado = false;
		
	}
	if((document.getElementById("lote").value=="") & (document.getElementById("seccion").value=="MI")){
		document.getElementById("lote").style.border=incorrecto_css;
		validado = false;
		
	}
	if(document.getElementById("fecha").value==""){
		document.getElementById("fecha").style.border=incorrecto_css;
		validado = false;
		
	}
	if(document.getElementById("numero").value==""){
		document.getElementById("numero").style.border=incorrecto_css;
		validado = false;
		
	}
	if(document.getElementById("titulo").value==""){
		document.getElementById("titulo").style.border=incorrecto_css;
		validado = false;
		
	}
	
	
	return validado;	
}

function tipo_alerta_js(elemento){
	
	/*Activar la opción tipo_alerta*/
	if(elemento.name=="seccion"){
		
		if(elemento.value=="AS"){
			document.getElementById("tipo_alerta_0").style.visibility='visible';
			document.getElementById("tipo_alerta_0").style.position='relative';
			
			document.getElementById("ambito_0").style.visibility='visible';
			document.getElementById("ambito_0").style.position='relative';
			
			document.getElementById("nro_registro_sanitario_0").style.visibility='hidden';
			document.getElementById("nro_registro_sanitario_0").style.position='fixed';
			
			document.getElementById("lote_0").style.visibility='hidden';
			document.getElementById("lote_0").style.position='fixed';
			}
	}
	if(elemento.value=="AC"){
		document.getElementById("nro_registro_sanitario_0").style.visibility='visible';
		document.getElementById("nro_registro_sanitario_0").style.position='relative';
		
		document.getElementById("lote_0").style.visibility='hidden';
		document.getElementById("lote_0").style.position='fixed';
		
		document.getElementById("tipo_alerta_0").style.position='fixed';
		document.getElementById("tipo_alerta_0").style.visibility='hidden';
			
		document.getElementById("ambito_0").style.position='fixed';
		document.getElementById("ambito_0").style.visibility='hidden';
		}
	if(elemento.value=="MI"){
		document.getElementById("lote_0").style.visibility='visible';
		document.getElementById("lote_0").style.position='relative';
		
		document.getElementById("nro_registro_sanitario_0").style.visibility='hidden';
		document.getElementById("nro_registro_sanitario_0").style.position='fixed';
		
		document.getElementById("tipo_alerta_0").style.position='fixed';
		document.getElementById("tipo_alerta_0").style.visibility='hidden';
			
		document.getElementById("ambito_0").style.position='fixed';
		document.getElementById("ambito_0").style.visibility='hidden';
		}
		
	if(elemento.value=="Seleccione..."){
				
		document.getElementById("nro_registro_sanitario_0").style.visibility='hidden';
		document.getElementById("nro_registro_sanitario_0").style.position='fixed';
		
		document.getElementById("tipo_alerta_0").style.position='fixed';
		document.getElementById("tipo_alerta_0").style.visibility='hidden';
			
		document.getElementById("ambito_0").style.position='fixed';
		document.getElementById("ambito_0").style.visibility='hidden';
		
		document.getElementById("lote_0").style.visibility='hidden';
		document.getElementById("lote_0").style.position='fixed';
		
		}
	
	
}



function solonumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = [8,37,39,46];

    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
}

function limpia(){
var val = document.getElementById("numero").value;
var tam = val.length;
for(i=0;i<tam;i++){
if(!isNaN(val[i]))
document.getElementById("numero").value=="Hola";
}
}


function obligatorio(name_id) {
	var elemento = document.getElementById(name_id);
	if(elemento.value=="" || elemento.value=="Seleccione..."){
			elemento.style.border=incorrecto_css;
			}else {
			elemento.style.border=correcto_css;
		}
}