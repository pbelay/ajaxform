<?
// Archivo en donde se acumulará el numero de visitas
$archivo = "envios.txt";
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$total = fread($abre, filesize($archivo));
// Cerramos la conexión al archivo
fclose($abre);
// Imprimimos el total de visitas dándole un formato


// Archivo en donde se acumulará el numero de visitas
$archivo = "contador.txt";
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$totalVisitas = fread($abre, filesize($archivo));
// Cerramos la conexión al archivo
fclose($abre);
// Imprimimos el total de visitas dándole un formato
echo "Total de visitas:".$totalVisitas." | Total de envios:".$total." ";
?>