<?php

//el 0777 es para otorgar todos los permisos a la carpeta
if(!is_dir('mi_carpeta')){
    mkdir("mi_carpeta", 0777) or die("no se puede crear la carpeta");
}
else{
    echo "la carpeta ya existe";
}

//para eliminar un directorio
// rmdir('mi_carpeta');



