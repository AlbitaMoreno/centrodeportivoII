<p><?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
<body>
	<?php
	include('header.php');
	?>
	<h4>Índice de hilos</h4>
	<section class="main">
		<?php
		try {
			include 'connect.php';

			$con2 = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 
			$con2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

			$sql = "SELECT * FROM hilo";

			$result = $conexion->query($sql);			
			$list = $result->fetchAll();

			foreach ($list as $row) {

				$DNI = $row["DNI"];
				
				$sql1 = "SELECT username FROM users WHERE DNI = '$DNI'";

				$users = $con2->query($sql1);
				$user = $users->fetchAll();

				$fecha_publi = $row["fecha_post"];
				$name = $user[0][0];

				print '<table>
				<tbody >
				<tr>
				<td class="thead"> '. $fecha_publi .'</td>
				<a class="username" href="foro.php?DNI='.$DNI.'&id_hilo='.$row["id"].'"> '. $name.' </a>
				</td>
				</tr>';
				print'
				<tr>
				<td class="tdbody">'. $row["titulo"] .'</td>	
				</tbody>
				</table>';
			}
			if($_SESSION['loggedin']){
				include('nueva_entrada.php');
			}
		}
		catch ( PDOException $e ) { echo "Conexión fallida" . $e->getMessage()  ; } 
		?>

	</section>
	<?php	
	include('footer.html');
	?>
</body>
</html></p>