<?php
include_once("conexion.php");
$conexion = conectar();

    if ($_POST) {
        $cedula = $_POST["cedula"] == '' ? null : $_POST["cedula"];

        if ($cedula == "") {
            echo "La cédula del usuario no puede estar vacío.";
            header("location: ../Desincorporación_Usuario.php");
        } else {

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
                $sql = "DELETE FROM SOL_USUARIOS WHERE sous_cedula ='".$cedula."'";

                $stmt2 = mysqli_prepare($conexion, $sql);

                    /* ejecutar la consulta */
                $stmt2->execute();

                /* almacenar el resultado */
                

               // printf("Número de filas: %d.\n", $stmt->num_rows);

                if ($stmt2->store_result()) {
                    echo '<p>Usuario borrado con éxito</p>';
                    header("location: ../Desincorporación_Usuario.php");
                } else {
                    echo '<p>El usuario no se pudo eliminar</p>';
                    header("location: ../Desincorporación_Usuario.php");
                }

            } else {
                echo '<p>El usuario no se encuentra registrado en el Sistema</p>';
                header("location: ../Desincorporación_Usuario.php");
            }

        }
    }

?>