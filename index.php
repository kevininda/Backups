<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backups";

function conexion($username,$password,$dbname){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$dbname, $username, $password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;		
	}
}

function obtener_post($conexion){
	$resultado = $conexion->query("SELECT * FROM respaldos");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

$conexion = conexion($username,$password,$dbname);
$post = obtener_post($conexion);



if (!$conexion) {
	header('Location: error.php');
}*/


require_once 'index.view.php';

?>