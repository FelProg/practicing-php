<?php
    /**
     * crear un array con el contenido de la siguiente tabla
     * 
     * ACCION AVENTURA DEPORTES
     * GTA    ASSASINS FIFA
     * COD    CRASH    PES
     * PUGB   PRINCE   MOTO GP
     * 
     * Representar los valores en una tabla de html tomando
     * los valores del array
     * 
     * cada columna tiene que estar en un archivo separado (include)
     */
?>
<?php require_once 'assets5/arregloDatos.php' //datos que se desplegarán ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla de video juegos</h1>
    <table border="1">
        
        <?php require_once 'assets5/encabezado.php' //datos del encabezado  ?>
        <?php require_once 'assets5/renglones.php' //datos de los renglones ?>
        
    </table>
</body>
</html>