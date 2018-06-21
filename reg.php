<?php
/*********************************************************************************
*
* 
*                             Registro usuario
*
*
**********************************************************************************/
if (isset($_POST['reg_user'])) {
  try { 
    // poner datos del form
    $DNI = $_POST['DNI'];
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tlf = $_POST['tlf'];
    $pas1 = $_POST['pas1'];
    $pas2 = $_POST['pas2'];

    $profesion = $_POST['profesion'];

    $idioma = $_POST['idioma'];

    if(!empty($_POST['piscina'])){
        $tarifa = "piscina";
    }
    if(!empty($_POST['gimnasio'])){
        $tarifa = "gimnasio";
    }
    if(!empty($_POST['gimnasio_piscina'])){
        $tarifa = "gimnasio_piscina";
    }

    if(!empty($_POST['sexo'])){
        if($_POST['sexo'] == "1"){
            $sexo = "mujer";
        }
        else{
            $sexo = "hombre";
        }
    }

    if ($pas1 != $pas2) {
      echo( "Contraseñas no coincidentes");

      //header('location : formularioalta.php' );
  }
  $password = md5($pas1);
  include 'connect.php';

  $conexion->query("INSERT INTO users (DNI, username, lastname, tlf, correo, sexo, profesion, password, tipo_tarifa) 
    VALUES('$DNI', '$username', '$lastname', '$tlf', '$email', '$sexo', '$profesion', '$password', '$tarifa');");
  
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['DNI'] = $DNI;
  $conexion="";

  header('location: index.php');
} catch ( PDOException $e ) { echo "Conexión fallida" . $e->getMessage()  ; } 



}

?>


