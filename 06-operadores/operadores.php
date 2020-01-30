<?php

//operadores aritméticos.

$numero1=55;
$numero2=80;

$suma=$numero1 + $numero2;
$resta=$numero1 - $numero2;
$multiplicacion=$numero1 * $numero2;
$division=$numero1 / $numero2;
$modulo=$numero1 % $numero2;





echo 'suma :' . $suma;
echo '<br>';
echo 'resta :' . $resta;
echo '<br>';
echo 'multiplicacion :' . $multiplicacion;
echo '<br>';
echo 'division :' . $division;
echo '<br>';
echo 'modulo :' . $modulo;




/*suma :135
resta :-25
multiplicacion :4400
division :0.6875
modulo :55*/

//Operadores incrementos y decrementos


$year= 2019;
$year--;
echo "<h1>$year</h1>";
$year= 2019;
$year++;
echo "<br>";
echo "<h1>$year</h1>";


//operadores de asignación
$edad=50;
echo $edad .'<br>';

//$edad=$edad + 5;
echo ($edad+=5);
echo "<br>";
echo ($edad-=5);
echo "<br>";
echo ($edad-=5);
echo "<br>";
echo ($edad*=5);














?>