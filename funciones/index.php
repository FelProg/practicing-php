<?php
function imprimeNombres($nombre)
{
    echo "$nombre <br/>";
}

// imprimeNombres("German");
$valor = $_GET['valor'];

tabla($valor);


//con doble comilla si agarra la variable.
function tabla($numero)
{
    echo "<h1>tabla de multiplicar del numero: $numero</h1>";
    for ($i = 1; $i <= 10; $i++) {
        $op = $numero * $i;
        echo "$numero x $i = $op <br/>";
    }
}



