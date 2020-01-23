<?php
/*
Ejercicio 4:
Crear un script en PHP que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje
según el tipo de variable que sea.-

*/

$matriz=['hola mundo', 14 ];
$cadena="juanito es un cuartichi";
$entero=5;
$verdadero=true;


if(is_array($matriz)){
    echo "<h1>es un array</h1>";

}

if(is_string($cadena)){
    echo "<h1>$cadena</h1>";
    
}
if(is_int($entero)){
    echo "<h1>es un entero</h1>";
    
}
if(is_bool($verdadero)){
    echo "<h1>es un booleano</h1>";
    
}










?>