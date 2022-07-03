<?php
$arreglo = array(
        'ACCION'   => array('GTA','COD','PUGB','OTRO'),
        'AVENTURA' => array('ASSASINS','CRASH','PRINCE','OTRO'),
        'DEPORTES' => array('FIFA','PES','MOTO GP','OTRO')
     );

    $indices = array_keys($arreglo); //['ACCION','AVENTURA','DEPORTES']
    $renglones = count($arreglo[$indices[0]]); //longitud de los elementos del indice accion (3)
