<?php
require_once 'conexion.php';
$funciones = new Funciones();
$conexion = $funciones->conectar();
$conexion->set_charset("utf8");

$camiones = "SELECT * FROM tutores";
$result = $conexion->query($camiones);

if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		  $response[] = $row;
	}
	echo json_encode($response);

} else {
	echo json_encode('0');
}

?>