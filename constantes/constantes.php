<?php

    define('nombre','nombre del usuario');
    define('web','gdevelopment.com');

    echo '<h1>'.nombre.'</h1>';

    //constantes predefinidas
    echo PHP_OS;
    echo PHP_VERSION;

    //operadores aritmeticos
    //los mismos de todos los lenguajes

    $numero1 = 7;
    $numero2 = 9;

    echo 'Suma: = '.($numero1+$numero2).'<br>';
    echo 'Resta = '.($numero1-$numero2).'<br>';
    echo 'Multiplicacion = '.($numero1*$numero2).'<br>';
    echo 'Division = '.($numero1/$numero2).'<br>';
    echo 'Modulo = '.($numero1%$numero2).'<br>';

    //operadores de incremento y decremento
    //igual que los demas..  solo hay que considerar el $ en la variable

    $num_transaccion= 10;

    echo $num_transaccion++;
    echo ++$num_transaccion;
    echo $num_transaccion--;
    echo --$num_transaccion;

    



?>