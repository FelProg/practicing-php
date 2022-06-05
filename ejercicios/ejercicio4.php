<?php
/*
reccoger 2 numeros por la url y hacer los ejercios
basicos de una calculadora

suma, resta, multiplicacion y division
*/

if (isset($_POST['n1']) && isset($_POST['n2']) ){
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];    
//etiqueta de inicio
echo "<h2>Calculadora</h2>";

echo 'Suma : '.($n1+$n2).'<br/>';
echo 'Resta : '.($n1-$n2).'<br/>';
echo 'Multiplicacion : '.($n1*$n2).'<br/>';
echo 'Divisioln : '.($n1/$n2).'<br/>';

}else{

    echo "<h1>Introduce correctament los valores por la URL</h1>";
}


?>