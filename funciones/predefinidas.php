<?php

//debugger
//var_dump nos devuelve el valor y el tipo de una variable
//y su longitud
$nombre = "German Felix";
var_dump($nombre);
echo '<br/>';

//Fechas
echo date('d-m-Y');
echo '<br/>';

//Tiempo
//proporciona el timestamp en formato unix un numero irrepetible
echo time();
echo '<br/>';

//Matematicas
echo "Raiz cuadrada de 10 : ".sqrt(10);
echo '<br/>';

echo "Numero aleatorio entre 10 y 40".rand(10,40);
echo '<br/>';

echo "Numero pi: ".pi();
echo '<br/>';

echo "redondear : ".round(7.891234, 2);
echo '<br/>';

//mas funciones generales

//detectar tipado
gettype($nombre);
echo '<br/>';

//comprobar tipado
if(is_string($nombre))
echo "La variable es un string";
echo '<br/>';

//comprobar si existe la variable
if(isset($edad)){
    echo "la variable existe";
}else{
    echo "la variable no existe";
}

//la funcion trim elimina los espacios en blanco
//antes y despues de la frase
echo '<br/>';
$frase = "     mi contenido        ";
var_dump($frase);

echo '<br/>';
$frase = "     mi contenido        ";
var_dump(trim($frase));

//eliminar variables e indices de arrays
echo '<br/>';
$year = 2020;
unset($year);

//comprobar si vacio, no existe o empty
$texto="";

echo '<br/>';
if(empty($texto)){
    echo "la varible esta vacia";
}else{
    echo "la variable tiene contenido";
}

//contar caracteres en un string
echo '<br/>';
$cadena = "12345";
echo strlen($cadena);


//encuentra la posicion del caracter inicial en un string
echo '<br/>';
$frase = "La vida es bella";
echo $frase."<br/>";
echo "la palabra vida empieza en el carater: ".strpos($frase,"vida")."<br/>";
echo "la letra l esta en el caracter: ".strpos($frase,"L")."<br/>";

//MAYUSCULAS a minusculas
echo '<br/>';
echo strtolower($frase)."<br/>";
echo strtoupper($frase)."<br/>";

//reemplazar palabras en un string
$frase = str_replace("vida","programacion",$frase);
echo $frase;



?>