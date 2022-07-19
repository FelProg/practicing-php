<?php

/**
 * Crear un ejercio con sesiones en donde si el valor get esta a 0 decremente,
 * y si esta a 1 incremente
 */

 //empezamos la sesion
 session_start();

 //creamos la variable de sesion para este caso
 if(!isset($_SESSION["numero"])){
    $_SESSION["numero"] = 0;
 }

 //aumentamos la variable en uno al recibir el parametro get 1
 if(isset($_GET['valor']) && $_GET['valor']==1){
    $_SESSION["numero"]++;
 }
 
 //decrementamos el valor en uno el parametro en get es 0
 if(isset($_GET['valor']) && $_GET['valor']==0){
    $_SESSION["numero"]--;
 }

 

?>

<!--se generan los valores de get para asignarlos a la sesion -->
<h1>El valor de esta sesion es <?= $_SESSION["numero"];?></h1>
<a href="ejercicioSesion.php?valor=1" >Incrementar valor</a><br>
<a href="ejercicioSesion.php?valor=0" >Decrementar valor</a>
