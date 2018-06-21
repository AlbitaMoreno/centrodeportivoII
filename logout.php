<?php
if (!empty($_POST['Cerrar'])) {
	session_start();

	unset($SESSION['DNI']);
	session_destroy();

	header('location:index.php');
}

?>