<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formularios</h1>
    <!-- el atributo action nos lleva a la pagina deseada
    si el atributo se encuentra vacio envia los datos a la misma
    pagina -->
    <form action="" method="POST" type="multipart/form-data">
        
        <!-- recibe texto por el usuario -->
        <label for="nombre">Nombre :</label>
        <p><input type="text" name="nombre" id=""></p>

        <!-- recibe texto por el usuario -->
        <label for="apellido">Apellido :</label>
        <p><input type="text" name="apellido" id=""></p>
        
        <!-- boton -->
        <p><input type="button" name="boton" value="Click"></p>
        
        <!-- checkbox -->
        <p>
            <input type="checkbox" name="checkbox1" value="Masculino" checked>
            <label for="checkbox1">Masculino</label><br/>
            <input type="checkbox" name="checkbox2" value="Femenino">
            <label for="checkbox2">Femenino</label>
        </p>
        
        <!-- color -->
        <label for="color">Color :</label>
        <p><input type="color" name="color" id=""></p>
        
        <!-- date -->
        <label for="fecha">Color :</label>
        <p><input type="date" name="fecha" id=""></p>
        
        <!-- email -->
        <label for="correo">Color :</label>
        <p><input type="email" name="correo" id=""></p>
        
        <!-- file -->
        <label for="archivo">Color :</label>
        <p><input type="file" name="archivo" id="" multiple></p>
        
        <!-- Number me permite subir o bajar un numero -->
        <label for="numero">Selecciona un numero :</label>
        <p><input type="number" name="numero" value="0" id="" ></p>
        
        <!-- password -->
        <label for="passwd">Introduce la contraseña</label>
        <p><input type="password" name="passwd"  id="" ></p>
        
        <!-- radiobutton -->
        <label for="radio">Introduce la contraseña</label>
        <p>
            <input type="radio" name="mexico" value="México" checked id="" >
            <label for="mexico">México</label><br/>
            <input type="radio" name="sudamerica" value="Sudamerica" id="" >
            <label for="sudamerica">Sudamerica</label><br/>
            <input type="radio" name="eeuu" value="Estados Unidos" id="" >
            <label for="eeuu">Estados unidos</label><br/>
        </p>
        
        <!-- campo text area -->
        <textarea name="miTextArea" id="" cols="30" rows="10"></textarea>
        <br/>

        <!-- campo select -->
        <select name="listaDePeliculas" id="">
            <option value="Pelicula" selected >Selecciona tu pelicula</option>
            <option value="Superman">Superman</option>
            <option value="Batman">Batman</option>
            <option value="Flash">Flash</option>
            <option value="Thor">Thor</option>
        </select>
        <br/>


        <input type="submit" value="Enviar">


    </form>
</body>
</html>