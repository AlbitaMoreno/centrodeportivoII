<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{   
	echo '<form method="post" action="">
	Título: <br>
	<input type="text" width="100%" name="titulo" />'; 

	echo '<br>';
	echo 'Mensaje: <br>
	<textarea name="contenido" /></textarea>
	<br>
	<input class = "button" type="submit" value="Enviar" />
	</form>';
}
else{
	try{
		$DNI = $_SESSION['DNI'];
		$titulo = $_POST['titulo'];
		$contenido = $_POST['contenido'];


		$sql = "INSERT INTO hilo(DNI, fecha_post, titulo,contenido) 
		VALUES('$DNI', NOW() , '$titulo', '$contenido')";

		$conexion = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 

		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$result = $conexion->query($sql);
		header('location: foroindice.php');
	}catch( PDOException $e ){ echo "Conexión fallida" . $e->getMessage()  ; }
}
?>
