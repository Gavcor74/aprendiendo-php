<?php
$archivo=$_FILES['jesusito'];
//var_dump($archivo);
//die();

$nombre=$archivo['name'];
$tipo=$archivo['type'];
 if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    if(!is_dir("images")){//si no existe el directorio images
        mkdir('images', 0777);//lo creamos aqui.
       }
    
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);//$nombre es el nombre original del fichero que se ha subido
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>IMAGEN SUBIDA CORRECTAMENTE";
    //var_dump($archivo);

 }else{ 
    header("Refresh: 5; URL=index.php");
    echo "<h1>sube una imagen con un formato correcto, por favor..........</h1>";
 }
?>