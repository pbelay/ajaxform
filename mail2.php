<?php
// El mensaje
$mensaje = "L�nea 1\nL�nea 2\nL�nea 3";

// En caso de que cualquiera de las l�neas sea m�s larga de 70 caracteres,
// debe usarse wordwrap()
$mensaje = wordwrap($mensaje, 70);

// Send
mail('pbelay@gmail.com', 'Nunca m�is Lumes', $mensaje);
?>