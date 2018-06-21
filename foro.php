<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<?php
include 'head.php';
?>

<body>
	<?php
	include 'header.php';
	?>
	<!-- ZONA DEL FORO-->
	<section>
		<?php
		try {
			$id_h = $_GET["id_hilo"];
			$DNI_post = $_GET["DNI"];


			include 'connect.php';

			$con2 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

			$sql = "SELECT * FROM hilo WHERE id = '$id_h' AND DNI = '$DNI_post'";

			$result = $conexion->query($sql);			
			$post = $result->fetchAll();

			$fecha_publi = $post[0][2];
			$sql1 = "SELECT * FROM users WHERE DNI = '$DNI_post'";

			$users = $con2->query($sql1);
			$user = $users->fetchAll();

			$name = $user[0][1];
			
			$con3 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con3->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


			$consulta = "SELECT ruta_imagen FROM imagen WHERE DNI = '$DNI_post'";
			$imgs = $con3->query($consulta);
			
			$datos = $imgs->fetchAll();

			$imagen = $datos[0][0]; // Datos binarios de la imagen.
			
			echo'
			<table>
			<tr>
			<!-- icono, fecha de la ultima respuesta y estado -->
			<td class="thead">						
			<section>
			'.$fecha_publi.'
			</section>				
			</td>
			</tr>

			<tr>
			<td class="tdbody">
			<!--Zona del usuario: icono, nombre, fecha del post-->
			<section>
			<center>
			<img src = '. $imagen. ' width = 40%>
			</center>
			<br>
			<p class="username">'. $name .' </p>
			<br>
			</section>
			</td>
			<td class="tdbody" id="td_post_1">
			<!-- titlo-->
			<section>
			<strong>
			<p class = "tbody"> Asunto:  '. $post[0][3] .' </p>
			</strong>
			</section>
			<!--mensaje del post-->
			<section name="tdmain">
			<p class="post_message" id="post_message1">
			'. $post[0][4] .'
			</p>
			<br>
			</section>
			</td>
			</tr>
			</table>';
		}
		catch ( PDOException $e ) { echo "Conexión fallida" . $e->getMessage()  ; } 
		//ZONA RESPUESTAS
		try {
			
			$con5 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con5->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$con3 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con3->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			
			$con4 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con4->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );




			$sql1 = "SELECT * FROM respuesta WHERE id_hilo = '$id_h' AND DNI_hilo = '$DNI_post' ";

			$res = $con5->query($sql1);
			$respuestas = $res->fetchAll();
			
			
			foreach ($respuestas as $rs) {

				$dni = $rs[3];
				$users = $con3->query("SELECT * FROM users WHERE DNI = '$dni'");
				$user = $users->fetchAll();
				$name = $user[0][1];
				
				$imgs_resp = $con3->query("SELECT * FROM imagen WHERE DNI = '$dni'");
				$img_resp = $imgs_resp->fetchAll();

				$image = $img_resp[0][1];

				$fecha_publi = $rs[4];
				echo'
				<table>
				<tr>
				<!-- icono, fecha de la ultima respuesta y estado -->
				<td class="thead">						
				<section>
				'.$fecha_publi.'
				</section>				
				</td>
				</tr>

				<tr>
				<td class="tdbody">
				<!--Zona del usuario: icono, nombre, fecha del post-->
				<section>
				<center>
				<img src = '. $image. ' width = 40%>
				</center>
				<br>
				<p class="username">'. $name .' </p>
				<br>
				</section>
				</td>
				<td class="tdbody" id="td_post_1">
				<!-- titlo-->
				<section>
				<strong>
				<p class = "tbody"> Asunto:  '. $post[0][3] .' </p>
				</strong>
				</section>
				<!--mensaje del post-->
				<section name="tdmain">
				<p class="post_message" id="post_message1">
				'. $rs[5] .'
				</p>
				<br>
				</section>
				</td>
				</tr>
				</table>';
			}
			if($_SESSION['loggedin']){
				include('nueva_respuesta.php');
			}
		}
		catch ( PDOException $e ) { echo "Conexión fallida" . $e->getMessage()  ; } 
		?>
	</section>
	<?php include 'footer.html';?>
</body>
</html>