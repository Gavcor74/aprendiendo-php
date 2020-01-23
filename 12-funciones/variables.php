<?php

/*
Variables locales:  Son las que se definen dentro de una función y no pueden ser 
usadas fuera de la función, solo están disponibles dentro. A no ser que hagamos un return

Variables Globales: Son las que se declaran fuera de una función y están disponibles dentro y fuera
de las funciones.
*/

$frase="Ni los genios son tan genios, ni los mediocres son tan mediocres.";

echo $frase;

function holaMundo (){
    global $frase;
    echo "<h3>$frase</h3>";

    $year=2020;
    echo "<h1>$year</h1>";
    return $year;//fuerzas a que imprima la variable, pero necesitas el echo antes de llamar la función 

}
echo "<br>";
echo holaMundo();
echo "<hr>";
//Funciones variables.

function buenosDias(){
     return "Hola! Buenos días :)";

}

function buenasTardes(){
    return "Hey! Que tal te ha ido la comida??";
}

function buenasNoches(){
    return "<h1>¿te vas a dormir ya? Buenas noches</h1>";

}
//caso 1
$horario= "buenasNoches";//la variable $horario toma el valor de la funcion buenasNoches()
 echo $horario(); //aquí llamamos a la función variable
 echo "<br>";
//caso 2
//$horario="noches";
//echo "Buenas ".$horario(); //las funciones variables no admiten concatenaciones, da error-
//caso 3
$horario="noches";
$miFuncion="Buenas".$horario;
echo $miFuncion();










?>