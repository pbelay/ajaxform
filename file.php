<? 

#Abrimos el fichero en modo de escritura 
$DescriptorFichero = fopen("data.txt","w"); 

#Escribimos la primera l�nea dentro de �l 
$string1 = "Esta es la primera l�nea de texto"; 
fputs($DescriptorFichero,$string1); 

#Escribimos la segunda l�nea de texto 
$string2 = "Y esta es la segunda l�nea de texto"; 
fputs($DescriptorFichero,$string2); 

#Cerramos el fichero 
fclose($DescriptorFichero); 

?> 