<?php
//para mostrar que los datos de la sesion persisten,
//mostramos la variable de sesion numero en este archivo

session_start();

echo "<h1>".$_SESSION['numero']."</h1>";