<?php

include("conexion.php");

$rut= $_POST['rut'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$cargo= $_POST['cargo'];
$contra1= $_POST['contrasena1'];
$contra2= $_POST['contrasena2'];

if($contra1 == $contra2){
    $consulta= "SELECT * FROM personal WHERE rut = '$rut'";
    $ejecutar= mysql_query($consulta, $conexion);
    $resul= mysql_num_rows($ejecutar);

    if($resul == 0){
        $consulta= "INSERT INTO personal VALUE('$rut', '$nombre', '$apellido', '$cargo', md5('$contra1'))";

        $ejecutar= mysql_query($consulta, $conexion) or die ("No se pudo crear registro");

        header("Location: crear_personal.php?valida=si");
    }else{
        header("Location: crear_personal.php?erronea=si");
    }
    }else {
        header("Location: crear_personal.php?disintias=si");
    }

?>
