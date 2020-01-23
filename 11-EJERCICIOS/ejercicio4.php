<?php

/*
Ejercicio 4: Recoger dos numeros por la URL a través del parámetro GET
y hacer todas las operaciones básicas de una calculadora.
suma, resta, multiplicación y división.


*/
    if(isset($_GET['numero1']) && isset ($_GET['numero2'])) {
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    
    $resta=$numero1 - $numero2;
    $multiplicacion=$numero1 * $numero2;
    $division=$numero1 / $numero2;

    echo "<h3>La suma de los dos números es ". ($numero1 + $numero2)."<br>";
    echo "<h3>La resta de los dos números es ". $resta;"<br>";
    echo "<h3>La multiplicación de los dos números es ". $multiplicacion;"<br>";
    echo "<h3>La división de los dos números es ". $division;"<br>";

    }else{
    echo "<h1>Introduce los valores manualmente por la URL</h1>";
}







/*
$suma=$numero1 + $numero2;
$resta=$numero1 - $numero2;
$multiplicacion=$numero1 * $numero2;
$division=$numero1 / $numero2;

echo "<h3>La suma de los dos números es ". $suma;
echo "<h3>La resta de los dos números es ". $resta;
echo "<h3>La multiplicación de los dos números es ". $multiplicacion;
echo "<h3>La división de los dos números es ". $division;
*/







?>

    