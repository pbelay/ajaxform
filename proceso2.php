<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "pbelay@gmail.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Nunca Mais Lumes";
//$cuerpo = "<strong>Nome:</strong> ".$nombre."<br>";
//$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
//$cuerpo .= "<strong>Telefono:</strong> ".$telefono."<br>";
$cuerpo .= "<strong>Mensaxe:</strong> ".$mensaje;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if( $email != '' ){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
	mail($telefono, $asunto, $cuerpo.'p2');
	mail('pbelay@gmail.com', $asunto, utf8_encode ($cuerpo.'p3'));
}
?>