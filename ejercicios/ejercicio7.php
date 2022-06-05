<?php

    /*
    hacer un programa que nos muestre todos los numeros impares entre
    dos numeros
    */

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if (isset($n1) && isset($n2)) {
        
        for($i = $n1+1; $i < $n2; $i++ ){
            if ( $i%2 != 0 ) {
                echo '<p>'.$i.' es impar</p>';    
            }else{
                echo '<p>'.$i.' es par</p>';    
            }
            
        }
        
    }else{
        echo '<h1>Introduce correctamente los numeros</h1>';
    }
?>