<?php

/**
 * Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable SUPERGLOBAL,
 * es un array asociativo.
 */

 if(isset($_COOKIE['micookie'])){
     echo "<h1>". $_COOKIE['micookie']. "</h1>";
 }else{
     echo "no existe ninguna cookie";
 }


?>