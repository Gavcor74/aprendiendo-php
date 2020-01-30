<?php

/*Condicional IF
IF:

if(condicion){
    instruccion
}else{
    otras instrucciones
}
//OPERADORES DE COMPARACION

==  IGUAL
=== CLONES, EXACTAMENTE IGUAL
!= DISTINTO, DIFERENTE
<> DIFERENTE, MAYOR Y MENOR QUE
!== NO IDENTICO
<= MENOS IGUAL QUE
>=MAYOR IGUAL QUE

Operadores Logicos, principales
&& AND y
|| OR o
! NOT no






*/

$color="rojo";

if($color=="rojo"){
    echo "color rojo";
}else{
    echo "el color no es rojo";

}
echo "<br>";

$year=2019;
if ($year <= 2020){
    echo "es un año anterior al 2020";
}else{
    echo "no es anterior al 2020";
}

echo "<br>";
//y asi sucedivamente. 

//ejemplo3
$nombre="Jesus";
$edad=41;
$mayoria_edad=18;

if($edad>=$mayoria_edad){
    
    echo  $nombre . " es mayor de edad";
}else{
    echo  $nombre . " es menor de edad";
}

echo "<hr>";

//SWITCH: Es un código más limpio que el ifelse
$dia=3;
switch ($dia) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;

    
    default:
        echo "Es finde";
        break;
}








echo "<hr>";
//else if
$dia=4;

    if($dia==1){
    echo "Lunes";
}elseif($dia==2){
    echo "Martes";
}elseif($dia==3){
    echo "Miercoles";
}elseif($dia==4){
    echo "Jueves";
}else{
    echo "de viernes a Sádado es como fin de semana";
}

echo "<br>";
echo "<hr>";

$pais="Francia";
if($pais=="Mexico" || $pais=="España" || $pais=="Colombia"){
        echo "En este país se habla español";
}else{
    echo "no se habla español";
}

echo "<hr>";

//GOTO: Se salta todas las instrucciones hasta llegar a la referncia goto.

goto ejecuta_aqui;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";
echo "<h3>Instrucción 5</h3>";

ejecuta_aqui:
echo "<h1>Me he saltado echos</h1>";


?>