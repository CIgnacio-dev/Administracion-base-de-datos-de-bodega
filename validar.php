<?php

include('conexion.php');

$rut = $_POST['usuario'];

$pass = md5($_POST['pass']);

$consulta = "SELECT * FROM personal WHERE rut = '$rut' AND contraseña = '$pass'";

$ejecutar = mysql_query($consulta, $conexion);
$resul = mysql_num_rows($ejecutar);

if($resul > 0){
session_start();

	$result = mysql_fetch_array($ejecutar);

	$_SESSION["activo"] = true;
	$_SESSION["usuario"] = $result['nombre']. " ".$result['apellido'];

	$_SESSION["cargo"] = $result["cargo"];

	if($result["cargo"] == "Admin"){
		header("Location:principalAdmin.php");
	} else if ($result["cargo"] == "Bodega") {
		header("Location:principalBodega.php");
	}


else{
	header("Location: login.php?error=si");
}
}


?>