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
    </style>
</head>
<body>
    <h1>Validar formularios en php</h1>
    <form action="procesar_formulario.php" method="POST">
        <div class="container">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" ><br/>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z ]+"><br/>
            <label for="edad">Apellido</label>
            <input type="number" name="edad" required="required" pattern="[1-9]+"><br/>
            <label for="email">Email</label>
            <input type="email" name="email" required="required"><br/>
            <label for="pswd">Password</label>
            <input type="password" name="pswd" required="required"><br/>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>