	<?php 
		$host = 'localhost';
		$database = 'login';
		$user = 'root';
		$pass = '';

		try {
			$con = new PDO('mysql:host='.$host.';dbname='.$database,$user,$pass);
			//print "Conexion establecida";
		}
		catch(PDOException $e){
        print "Error de conexion ".$e->getMessage()."";
        die(); 
		}
		
	
	 ?>