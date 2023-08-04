<?php
include_once("conexion.php");
$conexion = conectar();
if ($_POST) {
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$unidad_organizativa = $_POST["unidad_organizativa"];
$grupo_acceso = $_POST["grupo_acceso"];
$ubicacion = $_POST["ubicacion"];
$cargo = $_POST["cargo"];

$sql = "SELECT count(*) FROM SOL_USUARIOS WHERE sous_cedula ='.$cedula.'";

          
$stmt = mysqli_prepare($conexion, $sql);

        /* ejecutar la consulta */
$stmt->execute();

/* almacenar el resultado */
$stmt->store_result();

printf("Número de filas: %d.\n", $stmt->num_rows);

/* cerrar la sentencia */
//$sentencia->close();


$cantidad = $stmt->num_rows;

if ($cantidad > 0) {
    
$sql = "UPDATE SOL_USUARIOS SET
    sous_nombre = '$nombre',
    sous_apellido = '$apellido',
    sous_unidad_org = '$unidad_organizativa',
    sous_grupo_acceso = '$grupo_acceso',
    sous_ubicacion = '$ubicacion',
    sous_cargo = '$cargo',

WHERE sous_cedula = '$cedula'";

$stmt2 = mysqli_prepare($conexion, $sql);

                    /* ejecutar la consulta */
                $stmt2->execute();

if ($stmt2->store_result()) {
} else {
    echo '<p>El usuario no se pudo ser modificado</p>';

}
}
}
?>