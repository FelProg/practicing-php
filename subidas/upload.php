
<?php
$archivo = $_FILES['file'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];


//espera 5 segundos y regresa a index.php
header("Refresh: 5; URL=index.php");

//se le da la seleccion de tipos de archivo
if($tipo == "image/png" || $tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/gift"){

    //si el directorio no existe, se crea
    if(!is_dir('images')){
        mkdir('images',0777);
    }

    //se mueve el archivo seleccionado al directorio images/
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo '<h1>Archivo subido correctamente</h1>';
}else{
    echo '<h1>El archivo seleccionado no es una imagen</h1>';
}
// var_dump($archivo);
// die();

