<?
// Archivo en donde se acumular� el numero de visitas
$archivo = "envios.txt";
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$total = fread($abre, filesize($archivo));
// Cerramos la conexi�n al archivo
fclose($abre);
// Imprimimos el total de visitas d�ndole un formato


// Archivo en donde se acumular� el numero de visitas
$archivo = "contador.txt";
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$totalVisitas = fread($abre, filesize($archivo));
// Cerramos la conexi�n al archivo
fclose($abre);
// Imprimimos el total de visitas d�ndole un formato
echo "Total de visitas:".$totalVisitas." | Total de envios:".$total." ";
?>