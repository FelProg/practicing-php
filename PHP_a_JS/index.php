<?php
 
 $nombre = "German";
 $nombreConComillas = "\"El German\" O'Felix";
 $apellido = "Felix";
 $ultimoApellido = "Moroyoqui";
 $otraVariable = "Otra forma de pasar variables de php a javascript";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="name" content="<?= htmlspecialchars($ultimoApellido)?>">
    <link rel="shortcut icon" href="#"> <!--REMUEVE EL FAVICON ERROR EN EL DESARROLLO -->
    <title>Variables php a js</title>
</head>
<body>

    <h1 data-name="<?= htmlspecialchars($otraVariable) ?>">A continuación la variable</h1><br/>

    <input type="hidden" value="<?= htmlspecialchars($apellido) ?>">

    <script>
        var nombre = '<?= $nombre ?>';
        var nombreConComillas = <?= json_encode($nombreConComillas) ?>;
        var apellido = document.querySelector('input[type="hidden"]').value;
        var ultimoApellido=document.querySelector('meta[name="name"]').content;
        var otraVariable = document.querySelector('h1').dataset.name;

        alert ("hola "+nombre);
        alert ("hola "+ nombreConComillas);
        alert ("hola "+apellido+" "+ultimoApellido);
        alert(otraVariable);
    </script>
    
</body>
</html>