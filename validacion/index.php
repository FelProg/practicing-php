<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Validación</title>
    <style>
        :root {
            --links: red;
        }

        label{
            /* display: inline-block;        */
            margin: 5px 0;
        }

        input{
            width:90%;
        }
        .container{
            width: 80%;
            /* border: 1px solid #000; */
            margin: 0 auto;
        }
        header{
            /* border: 1px solid #000; */
            width: fit-content;
            margin: 0 auto;
            color: #4c4d5f;
            /* border: 1px solid #000; */

        }
        body{
            background-image: url("https://images.unsplash.com/reserve/aOcWqRTfQ12uwr3wWevA_14401305508_804b300054_o.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80");
            background-size: cover;
        }
    </style>
</head>
<body>
    <header>
    <h1>Validar formularios en php</h1>

    <?php
        if (isset($_GET['correcto'])) {
            $correcto = ($_GET['correcto'] == 'correcto') ? "Envio correcto" : "Envio incorrecto";
            echo "<h3>$correcto</h3>";
        }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <div class="container">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"  pattern="[A-Za-z ]+" >
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"  pattern="[A-Za-z ]+">
            <label for="edad">Edad</label>
            <input type="number" name="edad"  pattern="[1-9]+">
            <label for="email">Email</label>
            <input type="email" name="email" >
            <label for="pswd">Password</label>
            <input type="password" name="pswd" >
            <input type="submit" value="Enviar">
            <button type="reset">Limpiar formulario</button>
        </div>
    </form>
    </header>
    <script>
        function despliega(e){
            alert (e);
        }
    </script>    
    
    
</body>
</html>