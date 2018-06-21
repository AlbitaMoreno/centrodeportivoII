<?php
require_once 'reg.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="pag_style_index.css" />
  <link rel="icon" 
  type="image/png" 
  href="imagenes/myicon.jpg" />
  <meta charset="utf-8" />
  <title>UnixDeport</title>
  <script type="text/javascript" src="validar_form.js"></script>
</head>
<body>
   <?php 
   include 'reg.php';
   ?>
   <?php include 'header.php'; ?>

   <form class="altaUsuario" action="reg.php" method = "post" onsubmit="return validar()">
      <h4>Datos Personales</h4>
      <table>
         <tbody>
            <tr>
               <td>
                  <label for ="username">Nombre *</label>
               </td>
               <td colspan="2">
                  <input maxlength="30" size="20"  type="text" name="username" id = "username">
               </td>
            </tr>
            <tr>
               <td><label for="lastname">Apellidos *</label> </td>
               <td colspan="2"><input maxlength="30" size="20" type="text" name="lastname" id = "lastname" value=""></td>
               <td><label for="sexo">Sexo *</label> </td>
               <td colspan="2">
                  <select id="sexo" name="sexo" style="visibility: visible;">
                     <option value="">- - -</option>
                     <option value="0">Hombre</option>
                     <option value="1">Mujer</option>
                  </select>
               </td>

            </tr>
            <tr>
               <td><label>DNI *</label> </td>
               <td colspan="4">
                  <input style="margin-left:5px;" maxlength="10" type="text" name="DNI" id = "DNI" value="">
               </td>
            </tr>
            <tr>
               <td><label for="tlf">Teléfono *</label> </td>
               <td colspan="2"><input autocomplete="on" maxlength="11" type="text" name = "tlf" id="tlf"></td>
            </tr>
            <tr>
               <td><label for="email">Correo *</label> </td>
               <td colspan="2">
                  <input maxlength="23" type="text" name="email" id="email" value="">
               </td>
               <td>
                  <label for="profesion">Profesión</label>
               </td>
               <td colspan="2">
                  <select id="profesion" name="profesion">
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
               <td colspan="3"></td>
            </tr>
            <tr>
               <td>
                  <label for="idioma">Idioma</label> 
               </td>
               <td>
                  <select id="idioma" name="idioma" style="visibility: visible;">
                     <option value="">- - -</option>
                     <option value="0">Castellano</option>
                     <option value="1">Catalán</option>
                     <option value="2">Inglés</option>
                     <option value="4">Ruso</option>
                     <option value="5">Alemán</option>
                     <option value="6">Francés</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td></td>
               <td colspan="2"></td>
            </tr>
            <tr>
               <td>
                  Tarifa para el uso de las instalaciones
               </td>
               <td>
                  <input type="radio" id="piscina" name="piscina"/>Sólo piscina                  
                  <br>
               </td>
               <td>
                  <input type="radio" id="gimnasio" name="gimnasio"/>Sólo gimnasio
               </td>               
               <td>
                  <input type="radio" id="gimnasio_piscina" name="gimnasio_piscina"/>Piscina y gimnasio
               </td>
            </tr>
            <tr>
               <td></td>
               <td colspan="2"></td>
            </tr>
            <tr>
               <td>
                  <label>Contraseña *</label>
                  <td colspan="2">
                     <input maxlength="30" size="20"  name="pas1" id="pas1" type="password" value="">
                  </td>
               </td>
               <td>
                  <label>Repita la Contraseña</label>
                  <td colspan="2">
                     <input maxlength="30" size="20" name="pas2" id="pas2" type="password" value="">
                  </td>
               </td>
            </tr>
            <tr>
               <td colspan="6">
                  <input id="acepto" name="acepto" value="SI"  type="checkbox"> 
                  <label for="acepto">Doy permiso a la instalación para que me envíe e-mails y sms promocionales</label>
               </td>
            </tr>

            <tr>
               <td colspan="6">
                  <input id="acepto" name="acepto" value="SI" type="checkbox">
                  <label for="acepto">He leído y acepto los 
                     <a id ="link_form" href="">Términos generales, condiciones de alta y normativa general de la instalación </a>. Me comprometo a cumplir la normativa general.*
                  </label>
                  <br>
                  <label>Más información sobre los <a id ="link_form" href="precios.html">Precios y Promociones </a>.</label>
               </td>
            </tr>
            <tr>
               <td></td>
               <td colspan="2"></td>
            </tr>
            <tr><td colspan="6"></td></tr>
            <tr>
               <td colspan="6">
                  <strong><p style="font-weight: bold; font-size: 9px;">* Campos obligatorios</p></strong>
               </td>
            </tr>
         </tbody>
      </table>
      <center><input type="reset" class="button" value="Vaciar Inscripción" /></center>
      <center>
         <a href="index2.php">
            <input type="submit" class="button" name="reg_user" id = "reg_user" />
         </a>
      </center>
   </form>
   <?php include 'footer.html'; ?>

   </html>