<?php

/*
Escribir un programa que imprima por pantalla los cuadrados
(numero multiplicado por sí mismo) de los 40 primeros numeros naturales.
PD: Utilizar bucle WHILE- y el FOR
/*$contador=0;
while ($contador <= 40) {
    $cuadrado=$contador * $contador;
    echo "<h4>$cuadrado</h4>";
    $contador++;

    

}   */

//ahora con el For

$contador=0;
for ($contador=0; $contador <= 40 ; $contador++) { 
    $cuadrado=$contador * $contador;
    echo "<h4>$cuadrado</h4>";
}



?>






