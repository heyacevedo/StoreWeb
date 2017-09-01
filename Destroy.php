<?php 
session_start();
sessson_destroy();
header('index.html');
 ?>
 <p><a href="Destroy.php">Cerrar Sesion</a></p>