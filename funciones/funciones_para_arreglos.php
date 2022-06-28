<?php

/**
 * Funciones para ordenamiento de arreglos
 */

//asort($arreglo)  ordena caracteres alfanumericos

$personal = array (
    'Gerente',
    'Administrativos',
    'Operativos',
    'Area técnica',
    'Mantenimiento',
    'Seguridad'
);

foreach ($personal as $key => $value) {
    # code...
    echo $key." ".$value;
    echo "<br/>";
}

echo "<br/>";
asort($personal);

foreach ($personal as $key => $value) {
    # code...
    echo $key." ".$value;
    echo "<br/>";
}

//orden descendente
arsort($personal);
echo "<br/>";

foreach ($personal as $key => $value) {
    # code...
    echo $key." ".$value;
    echo "<br/>";
}

//sort($arreglo) ordena números
echo "<br/>";

$calificaciones = array ( 100, 90,100, 50, 70);

foreach ( $calificaciones as $i => $calificacion ){
    echo $i." ".$calificacion;
    echo "<br/>";
}

echo "<br/>";
sort($calificaciones);

foreach ( $calificaciones as $i => $calificacion ){
    echo $i." ".$calificacion;
    echo "<br/>";
}

//agrega al final del arreglo
array_push($personal, 'Seguridad');

//elimina del final del arreglo
array_pop($personal);

//elimina el indice del segundo argumento de la funcion
unset($personal[0]);

//sacar un elemento aleatorio del arreglo lo almacena en indice y lo despliega.
$indice = array_rand($personal);
echo $indice;

//reverse un arreglo
array_reverse($calificaciones);

//buscar dentro de un arreglo
$indice_de_elemento_buscado = array_search('Operativos',$personal);
var_dump($indice);

echo 'nos muestra el numer de elementos del arreglo personal<br/>';
//contar numero de elementos
echo count($personal)."<br/>";
echo sizeof($personal);


?>
