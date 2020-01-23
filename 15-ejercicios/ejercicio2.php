<?php
/*
EJERCICIO 2:
Escribir un programa en PHP que añada valores a un array mientras que su longitud 
ES menor a 120 y luego mostrarl por pantalla el indice 22.
*/

$contador=[];

$i=sizeof($contador);


    for ($i=0; $i < 120; $i++) { 
        array_push($contador,"elemento - ".$i);
    }

echo $contador[22];

?>