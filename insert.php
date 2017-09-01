<?php 
if (isset($_POST['usuario'])and isset($_POST['password'])) {
	include 'Conec.php';
	$nonuser=$_POST['usuario'];
	$nonpass=$_POST['password'];
	$count = $con->query('insert into registros(usuario,password) values("'.$nonuser.'","'.$nonpass.'")');
	//echo $insertar;
	$con = null;
	header("location: login.php");
}
 ?> 	