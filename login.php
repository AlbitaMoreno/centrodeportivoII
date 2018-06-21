<?php
/*********************************************************************************
*
* 
*                             Loggin usuario
*
*
**********************************************************************************/
session_start();

if(isset($_POST['Send'])){
  $DNI = $_POST['DNI'];
  $pass = $_POST['pass'];

  try { 

    $conexion = new PDO( "mysql:host=localhost;dbname=db77447831_pw1718", "alba", "alba"); 

    $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = "SELECT username, password FROM users WHERE DNI='$DNI'";

    $result = $conexion->query ($sql);

    $rows = $result->fetchAll();

    $n = count($rows);


    //print_r($rows);   //valor de la contraseña en la BD

    $pass = md5($pass);

    $pass = substr ($pass,0,30);

    if ($n ==  1) {
      echo "aqui";
      if($pass == $rows[0][1]){
        echo "aqui";
        $username = $rows[0][0];

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['DNI'] = $DNI;

        print_r( $_SESSION['username']);
        header('location: index.php');
      }else{
        echo "Contraseña incorrecta";
      }

    }
    else {
      echo("Error al loggearte");
    }
    $result="";
    $conexion="";   
  } catch ( PDOException $e ) { echo "Conexión fallida" . $e->getMessage()  ; } 
}


?>