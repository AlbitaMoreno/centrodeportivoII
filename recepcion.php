<?php
require_once 'almacenar.php';

if(!empty($_POST)){
	if (subir_fichero('imagenes','campofotografia'))
		
		header('location: index.php');
}
?>