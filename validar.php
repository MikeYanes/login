<?php 
	$usuario=$_POST['us'];
	$password=$_POST['co'];

	$conexion=mysqli_connect("localhost","root","","bdlog");

	$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$password'";
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		header ("location:ingresarr.html");
	}
	else {
    ?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<center style="color:red;" ><h1>Error de Autenticación</h1></center>

				<center><a href="index.html" style="text-decoration:none;"><br><br>
					<div style="background:#00A644; width:20%; height:30%; ">
						<h2 style="color:white; padding-top:20px; font-family:helvetica;">Regresar al Login</h2>	
				    </div>
				</a></center>
				
			</body>
			</html>
    <?php 
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>