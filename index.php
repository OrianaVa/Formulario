<?php
include('Templates/db.php');
session_start();

if (isset($_POST["usuario"])) {
    if (isset($_POST["clave"])&& isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["clave"];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['usuario'] = $hash;

        $consulta = "SELECT usuario, clave FROM user_login where usuario='".$usuario."' and clave='".$password."'";
        $resultado = mysqli_query($conex,$consulta);

        $filas=mysqli_num_rows($resultado);
        /*var_dump($filas);
        exit;*/
        if ($filas) {
            header("location: creacion_de_usuario.php");
        } else {    
            header("location: ../index.php");
        }
        mysqli_free_result($resultado);
    }   else {
            ?> 
            <h3 class="bad">¡Error de autenticación!</h3>;
           <?php
           }
    }

mysqli_close($conex); 
  
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<img src="plugins/images/Logosv.png" type="image/png">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="index.php" method="POST" name="inicio">
				<label for="usuario">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="usuario" placeholder="Nombre de Usuario" id="usuario" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="clave" placeholder="Clave del Usuario" id="clave" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>