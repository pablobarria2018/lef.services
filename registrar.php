<?php
include 'cn.php';
$nombre = $_POST["nombres"];
$rut = $_POST["rut"];
$nacimiento = $_POST["nacimiento"];
$direccion = $_POST["direccion"];
$oficio = $_POST["oficio"];
$motivo = $_POST["motivo"];
$diag = $_POST["diag"];
$sesion = $_POST["sesion"];

$insertar = "INSERT INTO general(motivo,diag) VALUES ('$motivp','$diag')"
$resultado = mysqli_query($conexion)