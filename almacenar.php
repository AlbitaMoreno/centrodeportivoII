<?php
session_start();

function subir_fichero($directorio_destino, $nombre_fichero)
{
    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
    if (is_dir($directorio_destino) && is_uploaded_file($tmp_name))
    {
        $img_file = $_FILES[$nombre_fichero]['name'];
        $img_type = $_FILES[$nombre_fichero]['type'];
        
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
           strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            
            if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file))
            {
                $DNI = strtoupper ($_SESSION['DNI']);
                include 'connect.php';

                $ruta = $directorio_destino . '/' . $img_file;

                $conexion->query("INSERT INTO imagen (DNI, ruta_imagen) VALUES('$DNI', '$ruta')");
                return true;
            }
        }
    }
    //Si llegamos hasta aquí es que algo ha fallado
    return false;
}
?>