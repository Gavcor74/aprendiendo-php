<?php
/*
//abrir archivo
$archivo= fopen("fichero_texto.txt", "a+");//a+ esppara poder modificar el archivo desde PHP


//leer contenido

while(!feof($archivo)){ 
    $contenido=fgets($archivo);
    echo $contenido."<br>";
}



//modificar un archivo desde PHP
echo "<br>";
fwrite($archivo, "esto lo pongo desde PHP");




//cerrar archivo
fclose($archivo);
*/

//copiar un archivo

copy("fichero_texto.txt", "viva_php.txt");

//renombrar un archivo
rename("viva_php.txt","gueveras.php");
//borrar un archivo
unlink("gueveras.php");

//comprobar si existe un archivo

if(file_exists("gueveras.php")){
    echo "el archivo existe!!!";

}else{
    echo "el archivo no existe";
}


?>