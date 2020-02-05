<?php

/**
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, que una variable SUPERGLOBAL,
 * es un array asociativo.
 */

 if(isset($_COOKIE['micookie'])){
     echo "<h1>". $_COOKIE['micookie']. "</h1>";
 }else{
     echo "no existe ninguna cookie";
 }

 echo "<br>";

 if(isset($_COOKIE['unminuto'])){
    echo "<h1>". $_COOKIE['unminuto']. "</h1>";
}else{
    echo "no existe ninguna cookie";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<a href="borrar_cookies.php">Borrar mis galletas</a>
<a href="crear_cookies.php">Crear mis galletas</a>