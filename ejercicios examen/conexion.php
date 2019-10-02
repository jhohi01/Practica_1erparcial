<?php
function conexion($database, $usuario, $pass){
	try{
		$con = new PDO("mysql:host=localhost; dbname=$database", $usuario, $pass);
		return $con;
	}catch(PDOException $e){
		return false;
	}
}
  ?>