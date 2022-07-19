<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subidas</title>
</head>
<body>
    <h1>Subir archivos con php</h1>
    <hr/>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo"><br/>
        <p>
            <input type="submit" value="Enviar"><br/>
        </p>
    </form>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir</title>
</head>
<body>
    <h1>Mi ejemplo de subida de imagenes</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" ><br>
        <button type="submit">Subir</button><br>
    </form>
    <br>
    <h2>Despliegue de imagenes renderizadas</h2>
    <hr>

    <?php
    //variable para verificar que se abrió el directorio
    $gestor = opendir('./images');

    //si se abrió continua
    if($gestor){
        //leemos una a una las imagenes en el directorio is se la asignamos a $image
        while(($image = readdir($gestor)) !== false){
            //aqui se filtran solo los archivos de imagenes
            if($image != "." && $image != ".."){
                //se despliega la imagen considerando su path
                echo "<img src='images/$image' width='300px'><br>";
            }
        }
    }

    ?>

</body>
</html>






















