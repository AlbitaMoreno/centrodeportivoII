<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<?php include 'head.php'; ?>

<body>
	<?php include 'header.php'; ?>

	<?php
	try { 
		$DNI = $_SESSION['DNI'];
		include 'connect.php';

		$sql = "SELECT * FROM users WHERE DNI = '$DNI'";

		$result = $conexion->query ($sql);

		$rows = $result->fetchAll();
		
		$username = $rows[0][1];
		$lastname = $rows[0][2];
		$email = $rows[0][3];
		$tlf = $rows[0][4];


		$result="";
		$conexion="";   
	} catch ( PDOException $e ) { echo "Conexión fallida "  ; } 


	?>

	<form id="form1" enctype="multipart/form-data" method="post" action="recepcion.php">
    <label>Imagen
        <input id="campofotografia" name="campofotografia" type="file" />
    </label>
    <input id="enviar" name="enviar" type="submit" value="Enviar" />
</form>

	<form class="altaUsuario" action = "mod_user.php" method = "post">
		<h4>Datos Personales</h4>
		<table>
			<tbody>
				<tr>
					<td>
						<label for ="username">Nombre</label>
					</td>
					<td colspan="4">
						<input maxlength="30" size="20"  type="text" name="username" id = "username" value = "" placeholder = "<?php print_r($username); ?>" >
					</td>
				</tr>
				<tr>
					<td><label for="lastname">Primer apellido</label></td>
					<td colspan="4">
						<input maxlength="30" size="20" type="text" name="lastname" id = "lastname" value=""  placeholder = "<?php print_r($lastname); ?>">
					</td>
				</tr>
				<tr>
					<td><label for="tlf">Teléfono</label> </td>
					<td colspan="4">
						<input autocomplete="on" maxlength="23" type="text" name = "tlf" id="tlf"  placeholder = "<?php print_r($tlf); ?>">
					</td>
				</tr>
				<tr>
					<td><label for="email">Correo</label> </td>
					<td colspan="4">
						<input maxlength="20" type="text" name="email" id="email" value=""  placeholder = "<?php print_r($email); ?>">
					</td>
					<td>
						<label for="PROFESION">Profesión</label>
					</td>
					<td colspan="4">
						<select id="PROFESION" name="PROFESION">
							<option value="">- - -</option>
							<option value="001">ESTUDIANTE</option>
							<option value="002">AUTONOMO</option>
							<option value="003">FUNCIONARIO</option>
							<option value="004">EMPLEADO EMPRESA PRIVADA</option>
							<option value="005">DIRECTIVO EMPRESA PRIVADA</option>
							<option value="006">DESEMPLEADO</option>
							<option value="007">OTROS</option>
							<option value="008">JUBILADO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Contraseña</label>
						<td colspan="4">
							<input maxlength="30" size="20"  name="pas1" id="pas1" type="password" value="">
						</td>
					</td>
					<td>
						<label>Repita la Contraseña</label>
						<td colspan="4">
							<input maxlength="30" size="20" name="pas2" id="pas2" type="password" value="">
						</td>
					</td>
				</tr>
			</tbody>
		</table>
		<center>
			<a href="index.php">
				<input type="submit" class="button" name="mod_user" id = "mod_user" />
			</a>
		</center>
	</form>
	<?php include 'footer.html'; ?>


	</html>