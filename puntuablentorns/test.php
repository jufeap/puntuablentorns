<?php
header('Content-Type: text/html; charset=UTF-8');
include("registros.php");
include("funciones.php");
if(conectarBDA($host,$usuario,$clave,$bda)){
	echo "Conexion correcta";
	
	$consulta="SELECT * FROM profesor";
	if($paquete=consultar($consulta)){
		echo tabular($paquete);
	}else{
		echo "<p> No se encontraron datos </p>";
	}
}else{
	echo "Conexion incorrecta";
}
?>