<?php
/**
 * Escribir un programa que añada valores
 * mientras que su longitud sea menor a 120 y luego mostrarlo
 * por pantalla.
 */

 function desplegar($arreglo){
    $resultado = "";
    foreach ($arreglo as $key => $value) {
        $resultado .= $value."<br/>";
    }
    return $resultado;
 }

 $coleccion = array();
 for($i = 0; $i < 120; $i++){
    array_push($coleccion, "elemento : ".$i);
 }
 
 echo desplegar($coleccion);
 

?>