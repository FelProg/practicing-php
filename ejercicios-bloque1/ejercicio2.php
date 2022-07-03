<?php
//sacar todos los numeros pares que hay del 1 al 100

for ($i=0; $i <= 100; $i++) { 
    $i%2 == 0 ? print '<p>'.$i.'</p>' : ""; 
}

?>