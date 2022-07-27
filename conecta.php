<?php
function conectar(){
	$host = "10.0.0.6";
    $user = "root";
    $password = "";
    $db = "inventario";
    $enlace = mysqli_connect($host, $user, $password, $db) or die ("Error de conexion a la base de datos");
	 return $enlace;
	}
	
?>
