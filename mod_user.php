<?php
session_start();
if (isset($_POST['mod_user'])) {
	try { 
		$DNI = $_SESSION['DNI'];
		$conexion = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 

		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		if(!empty($_POST['username'])){
			$username = $_POST['username'];
			$sql = "UPDATE users SET username = '$username'where DNI = '$DNI'";
			$conexion->query ($sql);
		}
		if(!empty($_POST['lastname'])){
			$lastname = $_POST['lastname'];
			$sql = "UPDATE users SET lastname = '$lastname' where DNI = '$DNI'";
			$conexion->query ($sql);
		}
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
			$sql = "UPDATE users SET email = '$email' where DNI = '$DNI'";
			$conexion->query ($sql);
		}
		if(!empty($_POST['tlf'])){
			$tlf = $_POST['tlf'];
			$sql = "UPDATE users SET tlf = '$tlf' where DNI = '$DNI'";
			$conexion->query ($sql);
		}
		if (!empty($_POST['pas1']) && isset($_POST['pas2'])) {
			if ($_POST['pas1'] != $_POST['pas2']) {
				echo( "Contraseñas no coincidentes");
				header('location: modify.php');
			}
			else{
				$password = md5($_POST['pas1']);
				$sql = "UPDATE users SET password = '$password' where DNI = '$DNI'";
				$conexion->query ($sql);

				header('location: index.php');
			}
		}
		else{
			echo "Campo contraseña vacío";
			header('location: mod.php');
		}

		$result="";
		$conexion="";   
	} catch ( PDOException $e ) {echo "Conexión fallida" . $e->getMessage()  ; } 
}
?>

