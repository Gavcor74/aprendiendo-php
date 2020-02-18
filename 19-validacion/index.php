<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios en PHP</title>
</head>
<body>
<h1 align="center">Validar formularios en PHP</h1>

<?php
if(isset($_GET['error'])){
    $error=$_GET['error'];
    if($error =='faltan_valores'){
        echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
    }
    if($error =='nombre'){
        echo '<strong style="color:red">Introduce el nombre en el formulario de forma correcta</strong>';
    }
    if($error =='apellido'){
        echo '<strong style="color:red">Introduce el apellido en el formulario de forma correcta</strong>';
    }
    if($error =='edad'){
        echo '<strong style="color:red">Introduce la edad en el formulario de forma correcta</strong>';
    }
    if($error =='email'){
        echo '<strong style="color:red">Introduce el email en el formulario de forma correcta</strong>';
    }
    if($error =='pass'){
        echo '<strong style="color:red">Introduce una contraseña de menos de cinco letras en el formulario.</strong>';
    }
}
?>

    <form action="procesar_formulario.php"  method="POST">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" ><br/> 

        <label for="apellido">Apellido</label><br/>
        <input type="text" name="apellido"><br/>


        <label for="edad">Edad</label><br/>
        <input type="number" name="edad" ><br/>


        <label for="email">Email</label><br/>
        <input type="email" name="email" ><br/>

        <label for="pass">Password</label><br/>
        <input type="password" name="pass" ><br/>
        <p>La contraseña no puede superar 5 caracteres</p>

        <input type="submit" value="Enviar"/>

    </form>
    
</body>
</html>