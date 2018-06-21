<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{   
	
	echo '<form method="post" action="">
	Respuesta: <br>
	<textarea name="contenido" /></textarea>
	<br>

	<input class = "button" type="submit" value="Enviar" />
	</form>';
}
else{
	try{
		$DNI = strtoupper ($_SESSION['DNI']);
		$contenido = $_POST['contenido'];

		$id_h = $_GET["id_hilo"];
		$DNI_post = $_GET["DNI"];

		$sql = "INSERT INTO respuesta (id_hilo, DNI_hilo, DNI_resp, fecha_resp, contenido_resp) 
		VALUES('$id_h', '$DNI_post', '$DNI', NOW(), '$contenido')";

		$conexion = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 

		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$result = $conexion->query($sql);
		header('location: foroindice.php');
	}catch( PDOException $e ){ echo "Conexión fallida" . $e->getMessage()  ; }
}
?>