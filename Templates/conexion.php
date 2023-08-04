<?php
//include_once("crear_usuario.php");
function conectar()
{
    $host = "localhost";
    $db = "intranet";
    $password = "";
    $username = "root";
    $port = 3306;

    //$conex= NEW PDO ("pgsql:host= $host; dbname=$dbname, $username, $password");

    $conexion = mysqli_connect($host, $username, $password) or die("No se ha podido conectar al servidor de Base de datos");
    mysqli_select_db($conexion, $db) or die("Upps! Pues va a ser que no se ha podido conectar a la base de datos");

    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());

    }
    else{
        return $conexion;
    }

    /*return "Connected successfully";

    if (mysqli_query($conexion, $sql)) {
        return conexion;
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($conexion);
        header("location:svintranet.html");
    }*/
   
}

?>