<?php
    /**
     * hacer una calculadora que sume, reste, divida y multiplique
     * valores introducidos por un formulario con post
     */
    

     if(isset($_POST['n1']) && isset($_POST['n2'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $opcion = $_POST['opcion'];

            switch ($opcion) {
                case 'sumar':
                    $resultado = "El resultado es ".($n1 + $n2);break;
                case 'restar':
                    $resultado = "El resultado es ".($n1 - $n2);break;
                case 'multiplicar':
                    $resultado = "El resultado es ".($n1 * $n2);break;
                case 'dividir':
                    $resultado = "El resultado es ".($n1 / $n2);break;
                default:
                    break;
            }
        }else{
            $resultado = "";
        }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>calculadora</h1>
    <hr>
    <form action="" method="POST">
     <label for="n1">Numero 1</label><br>
     <input type="number" name="n1" required="required"><br><br>
     
     <label for="n2">Numero 2</label><br>
     <input type="number" name="n2" required="required"><br><br>

     <!-- el agregarle el name le da el indice opcion al arreglo $_POST -->
     <input type="submit" value="sumar" name="opcion">
     <input type="submit" value="restar" name="opcion">
     <input type="submit" value="multiplicar" name="opcion">
     <input type="submit" value="dividir" name="opcion">
        
    </form>
    <?php
    //resultado
        echo "<h2>$resultado</h2>";
    ?>
    

    
</body>
</html>