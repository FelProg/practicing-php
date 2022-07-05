<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación</title>
    <style>
        label{
            display: inline-block;
            width: 100px;
            margin: 5px 0;
        }
        .container{
            width: fit-content;
            margin-left: 3rem;
        }
        header{
            /* border: 1px solid #000; */
            width: fit-content;
            margin: 0 auto;
            color: #4c4d5f;

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
            <input type="text" name="nombre"  pattern="[A-Za-z ]+" ><br/>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"  pattern="[A-Za-z ]+"><br/>
            <label for="edad">Edad</label>
            <input type="number" name="edad"  pattern="[1-9]+"><br/>
            <label for="email">Email</label>
            <input type="email" name="email" ><br/>
            <label for="pswd">Password</label>
            <input type="password" name="pswd" ><br/>
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