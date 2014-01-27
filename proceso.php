<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "secretaria.presidente@xunta.es";  //
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "#SosFragasDoEume";
$cuerpo = "<strong>Nome:</strong> ".$nombre."<br>";
$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
$cuerpo .= "<strong>Email destinatario:</strong> ".$telefono."<br>";
$cuerpo .= "<strong>Mensaxe:</strong> ".$mensaje;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
	include 'contadorEnvio.php';
	
}
mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
mail($email,$asunto,$cuerpo,$headers); //ENVIAR!
/*
mail('emma.alvarez.chao@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!	 
mail('jose.manuel.balseiro.orol@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('agustin.baamonde.diaz@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('gp-pp@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('pedro.manuel.arias.veira@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('agustin.baamonde.diaz@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('yolanda.diaz.lugilde@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('maria.isabel.garcia.pacin@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('jesus.goldar.guimil@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('alejandroalonso1973@yahoo.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('damaso.lopez.rodriguez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('enrique.novoa.lopez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('rosa.oubina.solla@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('marisol.pineiro.martinez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('pedro.puy.fraga@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('marta.rodriguez.arias@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('roman.rodriguez.gonzalez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('antonio.rodriguez.miranda@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('presidencia@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('cristina.romero.fernandez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('miguel.angel.santalices.vieira@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('maria.seoane.romero@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('alberto.sueiro.pastoriza@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('marta.valcarcel.gomez@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!
mail('daniel.varela.suanzes@parlamentodegalicia.es',$asunto,$cuerpo,$headers); //ENVIAR!


*/


?>