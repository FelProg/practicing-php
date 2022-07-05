<?php

    if(
        empty($_POST['nombre']) && 
        empty($_POST['apellido']) && 
        empty($_POST['edad']) && 
        empty($_POST['email']) && 
        empty($_POST['pswd'])
        ){
            // faltaron datos
            $correcto = "incorrecto";
            
            
        }else{
            
            // creacion de variables
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad']; 
            $email = $_POST['email']; 
            $pswd = $_POST['pswd']; 
    
            // envia confirmacion de correcto
            $correcto = "correcto";
    }

    header("Location:index.php?correcto=$correcto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    
</body>
</html>