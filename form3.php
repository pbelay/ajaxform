<?php
///////Configuración/////
$mail_destinatario = 'miemail@dominio.com';
///////Fin configuración// 

if (isset ($_POST['enviar'])) {
$headers .= "From: ".$_POST['email']. "rn";
if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellidos : ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '

Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros

'; 

else echo '

Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.

'; } 

echo '
<form action="?" method="post"> <label for="nombre">Nombre y apellidos : </label>  
<input type="text" name="nombre" size="50" maxlength="80"><br> <label for="email">Email : </label>
<input type="text" name="email" size="50" maxlength="60"><br> <label for="asunto">Asunto : </label>
<input type="text" name="asunto" size="50" maxlength="60"><br> <label for="mensaje">Mensaje : </label>  <textarea name="mensaje" cols="31" rows="5"></textarea> <br>
<label for="enviar">
<input type="submit" name="enviar" value="Enviar consulta"></label>
 </form>

&nbsp;

';
?>
