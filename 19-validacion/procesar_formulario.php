<?php

$error='faltan_valores';

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) 
&& !empty($_POST['email']) && !empty($_POST['pass'])){

    $error='ok';

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $edad= $_POST['edad'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    //validar nombre
    if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/",$nombre)){
        $error='nombre';
    }
    if(!is_string($apellido)|| !preg_match("/[a-zA-Z ]+/",$apellido)){
        $error='apellido';
    }
    if(!is_numeric($edad) || !filter_var($edad,FILTER_VALIDATE_INT) || $edad>100){
        $error='edad';
    }
    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error='email';
    }
    if(empty($pass) || strlen($pass)>5){
        $error='pass';
    }


}else {
    $error='faltan_valores';
    
}

if($error!='ok'){
    
    header("Location:index.php?error=$error");
}




?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios en PHP</title>
    </head>
    <body>
    <?php if($error == 'ok'): ?>
    <h1>Datos Validados correctamente</h1>
        <p><?=$nombre?><p>
        <p><?=$apellido?><p>
        <p><?=$edad?><p>
        <p><?=$email?><p>
        
    <?php endif;?>


    </body>
</html>