<?php

/**
 * Hacer un arreglo que contenga 8 numeros
 * -recorrerlo y mostrarlo
 * -ordenarlo y mostrarlo
 * -mostrar su tamaño
 * -buscar un elemento en el array
 * 
 */

 //funciones
 function mostrar($arreglo){
    $despliega="";
    foreach( $arreglo as $i => $numero){
        $despliega .= 'El numero '.$numero.' se encuentra en el indice '.$i.'<br>';
    }
    return $despliega;
 }


 //recorrerlo y mostrarlo
 echo "<h1>Recorrer el arreglo y mostrar el arreglo</h1>";

 $numeros = array(
    10,8,7,9,5,2,10,9
 );

 echo mostrar($numeros);

//ordenarlo y mostrarlo
echo "<h1>Ordenar los elementos de mayor a menor</h1>";
sort($numeros);

echo mostrar($numeros);

//mostrar la longitud
echo "<h1>La longitud del arreglo es: </h1>";
echo 'El tamaño del arreglo es : '.sizeof($numeros);
echo '<br/>';

//buscar algun elemento
$buscar = 5;
echo "<h1>Buscando el elemento $buscar tenemos: </h1>";
$posicion = array_search($buscar ,$numeros);
echo 'Si corremos la busqueda del numero 5 nos arroja la posicion = '.$posicion;

$buscar = 12;
$posicion = array_search($buscar ,$numeros);
echo "<h1>Buscando el elemento $buscar descubrimos que : </h1>";

if(empty($posicion)){
    echo 'El elemento no se encuentra';
}

echo "<h1>Se puede buscar con un parametro pasado por formulario</h1>";

if(isset($_GET['numero'])){
    $buscar = $_GET['numero'];
    $posicion = array_search($buscar,$numeros);
    if(!empty($posicion)){
        echo "el numero ".$buscar." esta en la poscion ".$posicion;
    }else{
        echo "el numero ".$buscar." no existe en el arreglo";

    }
}






