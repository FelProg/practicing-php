<?php

// // abrir archivo
// $archivo = fopen("fichero_texto.txt","a+"); //r solo lectura, a+ lectura y escritura

// //leer contenido
// while(!feof($archivo)){
//     $contenido = fgets($archivo);   //escribe la linea
//     echo $contenido."<br/>";      //pone un salto de linea al final de cada linea
// }

// //escribir en el archivo solo si el modo fopen esta en w o a+
// fwrite($archivo, "\nSoy una linea agregada al texto por php");


// fclose($archivo);

//copiar archivo
//copy('fichero_texto.txt','copia_de_fichero.txt');

//renombrar archivo
// rename('copia_de_fichero.txt','respaldo.txt');

//eliminar archivo
// unlink('respaldo.txt');

//comprobar si existe un archivo
$verifica = (file_exists('fichero_texto.txt')) ? "Si existe" : "No existe";

echo $verifica;

