<?php

/**
 * realizamos un array asociativo
 */

$personas = array(
    'emprendedor' => 'Elon Musk',
    'matemático' => 'Euler',
    'programador' => 'Brandon Eich'
);

// var_dump($personas);

echo '<br/>';

foreach ($personas as $key => $value) {
    # code...
    echo $key." es el indice de ".$value;
    echo '<br>';
}
/**
 * Array multidimensionales
 */
echo '<br>';

$clases = array(
    array(
        'clase' => 'Applied technology 3',
        'maestro' => 'German Felix'
    ),
    array(
        'clase' => 'Applied technology 2',
        'maestro' => 'Luis de la fuente'
    ),
    array(
        'clase' => 'Applied technology 1',
        'maestro' => 'Rossy'
    ),
);

foreach ($clases as $key => $contacto) {
    # code...
    echo $contacto['clase'];
    echo '<br>';
}
?>