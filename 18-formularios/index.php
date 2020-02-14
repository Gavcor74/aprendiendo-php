<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
<h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data" >
            
            <label for="nombre">NOMBRE : 
            <p><input type="text" name="nombre" autofocus="autofocus" placeholder="Introduce tu nombre"></p>
            
            <label for="apellido">APELLIDO : 
            <p><input type="text" name="apellido" autofocus="autofocus" placeholder="Introduce tu apellido"></p>
            <input type="submit" value="ENVIAR">
            
            <label for="boton">Botón : 
            <p><input type="button" name="boton" value="click here"></p>

            <label for="sexo">SEXO : 
            <p>HOMBRE: <input type="checkbox" name="sexo" value="hombre" checked="checked"></p>
            <p>MUJER : <input type="checkbox" name="sexo" value="mujer"></p>


            <label for="color">colorcito guapo : 
            <p><input type="color" name="color"></p>
            
            <label for="fecha">Fecha: 
            <p><input type="date" name="fecha"></p>
            
            <label for="email">Correo: 
            <p><input type="email" name="email"></p>

            <label for="file">Imagen: 
            <p><input type="file" name="file" multiple="multiple"></p>
            <input type="submit" value="Enviar"><br><hr>

            <label for="web">Web: 
            <p><input type="url" name="web"></p>

            <label for="ejercito">EJERCITO AL QUE PERTENECE:
            <p>EJERCITO DEL AIRE<input type="radio" name="ejercito" valor="Ejercito del aire"></p>
            <p>EJERCITO DE TIERRA<input type="radio" name="ejercito" valor="Ejercito de Tierra"></p>
            <p>ARMADA<input type="radio" name="ejercito" valor="Armada"></p>

            <textarea name="Comentario" id="comentario" cols="30" rows="10"></textarea><br> 
            <input type="button" value="Enviar">

            <br>
            <hr>

            PELICULAS:
            <select name="peliculas" id="peliculas">
                <option value="spiderman">SPIDERMAN</option>
                <option value="Gran Torino">GRAN TORINO</option>
                <option value="Star Wars">STAR WARS</option>
            
            
            
            </select>



        </form>

    
</body>
</html>


















