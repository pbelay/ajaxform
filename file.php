<? 

#Abrimos el fichero en modo de escritura 
$DescriptorFichero = fopen("data.txt","w"); 

#Escribimos la primera línea dentro de él 
$string1 = "Esta es la primera línea de texto"; 
fputs($DescriptorFichero,$string1); 

#Escribimos la segunda línea de texto 
$string2 = "Y esta es la segunda línea de texto"; 
fputs($DescriptorFichero,$string2); 

#Cerramos el fichero 
fclose($DescriptorFichero); 

?> 