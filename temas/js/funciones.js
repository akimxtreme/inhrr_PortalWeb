// JavaScript Document

function en_construccion(){
	alert("Proximamente - Espacio en Construccion - Trabajamos para brindar un mejor Servicio");
	}
	

function detalles(elemento){
	var a = elemento;
	var contenedor = document.getElementById(a);
		if(contenedor.style.visibility=="visible"){
			contenedor.style.visibility="hidden";
			}else {
			contenedor.style.visibility="visible";
				}
			
}