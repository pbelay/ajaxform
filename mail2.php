<?php
// El mensaje
$mensaje = "Línea 1\nLínea 2\nLínea 3";

// En caso de que cualquiera de las líneas sea más larga de 70 caracteres,
// debe usarse wordwrap()
$mensaje = wordwrap($mensaje, 70);

// Send
mail('pbelay@gmail.com', 'Nunca máis Lumes', $mensaje);
?>