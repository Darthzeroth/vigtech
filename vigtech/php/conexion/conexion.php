<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "vigilancia_tecnologica";
		
		$conexion = new mysqli($servername, $username, $password, $dbname);
		if ($conexion->connect_errno) {
	    echo "Fallo al Conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
?>
				
		