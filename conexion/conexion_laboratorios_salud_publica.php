<?php

//CONECTOR

function ConectarBD2(){
  return mysql_connect("localhost","root","s3cur1tys3c");
}


//EJECUTAR EXEC

function EjecuteExec2($conector,$sql1){
    mysql_select_db("laboratorios_salud_publica",$conector);
	@mysql_query("SET NAMES 'utf8'");
    return mysql_query($sql1,$conector);
	
}


//EJECUTAR FETCH

function ObtenerFila2($conector){
    return mysql_fetch_row($conector);
}

//
function NumFila2($q){
    return mysql_num_rows($q);
}

?>