<?php 
session_start();	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<meta charset="utf-8">
 	<title>Registro</title>
 </head>
 <body>
 <form action="insert.php" method="post">
 	<label for="text1"><p>Nombre usuario</p>
 		<p><input type="text" id="text1" name="usuario" placeholder="Nombre de usuario" required autofocus></p>
 	</label>

 	<label for="text2"><p>Password</p>
 		<p><input type="Password" id="text2" name="password" placeholder="Contraseña" required></p>
 	</label>
 		<input type="submit" value="Registrarse">
 </form>
 
 </body>
 </html>