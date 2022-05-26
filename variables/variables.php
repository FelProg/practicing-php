<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mi_variable = "Manejo de variables";
        $mi_numero = 77;
        $mi_bool = true;

        echo '<h1>'.$mi_variable.'</h1><hr>'
        .'<h3>la variable declarada tiene el numero '.$mi_numero.' en su contenido</h3>'
        .'<h3>y tambien tiene el valor bool de '.$mi_bool.' que significa verdadero</h3>'
    ?>
    <br>
    <h2>Que tipo de datos tenemos en php</h2>
    <ul>
        <li>int/integer</li>
        <li>float/double</li>
        <li>string</li>
        <li>bool</li>
        <li>null</li>
        <li>Array</li>
        <li>Objetos</li>
    </ul>
    <?php
        //'<h3>'.$numero.'</h3>';
        $numero = 78;
        $soy_texto = 'soy un texto concatenando una varible con el valor de '.$numero;
        echo $soy_texto;
        echo gettype($numero); // gettype me muestra el tipo de variable
        echo '<h3>'.$numero.'</h3>';

        var_dump($numero); //var_dump me muestra el tipo y el valor de la variable.
    ?>
    <?php
       
    ?>
</body>
</html>