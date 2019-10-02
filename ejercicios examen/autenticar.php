<?php session_start();
require 'conexion.php';
$con = conexion('bd_examen', 'root', '');
$password = $_POST['Password'];
$email = $_POST['email'];

if(!empty($password) && !empty($email)){
	$statement = $con->prepare("SELECT * FROM usuarios WHERE password = :password AND email = :email");
	$statement->execute(array(':email'=>$email, ':password' =>$password));
	$res = $statement->fetch();

	if($res!==false){
		$_SESSION['usuario'] = $email;
		echo 'La session se creo correctamente';
		header('Location: pagina_principal.php');
	}else{
		echo '¡El usuario no existe!';
	}
}else{
	echo 'Todo los datos son requeridos!';
}
?> 