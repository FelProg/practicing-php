<?php

/**
 * crear un script que tenga
 * 4 variables
 * 1 array
 * 1 string
 * 1 int
 * 1 booleana
 * 
 * imprima un mensaje segun el tipo.
 */

 //creando varibles
 $arreglo = array("hola","como","estas");
 $texto = "hola como estas";
 $numero = 123;
 $miBoole = true;

 function encuentraElTipo($dato){
    return gettype($dato);
 }

 echo "<br/><p>la variable 'arreglo' es de tipo : </p>".encuentraElTipo($arreglo);
 echo "<br/><p>la variable 'texto' es de tipo : </p>".encuentraElTipo($texto);
 echo "<br/><p>la variable 'numero' es de tipo : </p>".encuentraElTipo($numero);
 echo "<br/><p>la variable 'miBoole' es de tipo : </p>".encuentraElTipo($miBoole);

?>