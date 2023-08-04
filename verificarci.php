<?php
include_once("conexion.php");
$conexion = conectar();

$cedula = $_POST["cedula"] == '' ? null : $_POST["cedula"];

// Check if the ID is registered in the database
$sql = "SELECT cedula FROM usuario WHERE cedula = '$cedula'";
$resultado = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($resultado);

// Encode the data as JSON
$datos = json_encode($row);

// Echo the data back to the AJAX request
echo $datos;

?>
