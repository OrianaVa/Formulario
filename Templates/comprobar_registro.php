<?php

$cedula = $_POST['cedula'];

// Check if the record exists in the database
$sql = "SELECT * FROM usuario WHERE cedula = '$cedula'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    // The record exists
    $conexion = true;
} else {
    // The record does not exist
    $conexion = false;
}

// Return a JSON object with the `existe` property set to `true` or `false`
echo json_encode($conexion);

?>
