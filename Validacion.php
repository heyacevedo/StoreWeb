	<?php 
session_start();

if (!empty($_POST['user'])AND !empty($_POST['pass'])) {
	include 'conec.php';
	$nonuser=$_POST['user'];
	$nonpass=$_POST['pass'];
	$query='select * from registros where usuario ="'.$nonuser.'"';
	$result = $con->query($query);
		$realpass = $result->fetch();
	$realpass= $realpass["password"];
	if ($realpass == $nonpass) {
		
		header("location: index.php");
			}else{
			print'Datos incorrectos<br><a href="login.php">Regresar</a>';
		} 
		}else{
			print'Por favor ingrese completos los datos';
			print'<br><a href="login.php">Regresar</a>';

		}
 ?>