<?php
/**
 * Compruebe si una variable esta vacia
 * si lo esta
 * rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita.
 */

 function desplegar($texto){
    return "<br/><strong>".strtoupper($texto)."</strong>";
 }   

 $texto = "Hola";

 if(empty($texto)){
    echo "como la variable esta vacia la rellenamos con texto";
    $texto = "texto en minuscula que sera transformado";
    echo desplegar($texto);
 }else{
    echo "la variable tiene el contenido : ".$texto;
 }

?>