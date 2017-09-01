<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
 	<meta charset="utf-8">
 	<form action="validacion.php" method="post" enctype="applicatio/x-www-form-urlencoded">
  	<label for="text1"><p>usuario</p>  
  	<p><input type="text" id="text1" name="user" placeholder="Nombre de usuario"></p></label>
  	<label for="text2"><p>contraseña</p>
 	<p><input type="password" id="text2" name="pass" placeholder="¨Password"></p></label>
 	<input type="submit" value="Iniciar Sesion">
 	</form>
 	<button onclick="registro()">Registrarse</button>
 	<script type="text/javascript">
 		function registro(){
 			window.location="Registro.php";

 		}
 	</script>
</body>
</html>	