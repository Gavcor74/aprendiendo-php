<?php

/*BUCLE WHILE
REPITE LA EJECUCION DE UNA SERIE DE INSTRUCCIONES. 
TANTAS VECES COMO QUIERAS, EN BASE A UNA CONDICION.

while (condicion){
    bloque de instrucciones.
}
se sale aqui cuando el bloque ya no se cumple.

*/

//haremos un programa para que se ejecute los numeros del 1 al 100.

$a=0;
while ($a <= 100) {
    echo $a;

    if ($a!=100) {
        echo ",  ";
    }
    $a++;
}
echo ".";
echo "<hr>";
//Ejemplo 

if(isset ($_GET['numero'])){  
    // el () antes de $_GET es un "casteo" para convertir el tipo en entero.          //Comprobar que nos llega un parametro numero que nos llega por GET
     $numero=(int)$_GET['numero'];   // si existe, para eso usamos el if. si existe le damos un valor
                                //el valor nos va a llegar por la URL. 
}else{ // en el caso de que no llegue número, lo daremos valor 1.-
    $numero=1;                  
}


//var_dump($numero); //para ver si existe la variable numero. No existe. Pues ahora es cuando 
                    // es cuando se utiliza el if(isset) comprueba si existe.

echo "<h1>Tabla de multiplicar del $numero</h1>";

$contador=1;
while ($contador <= 10) {
    echo "$numero x $contador =" . ($numero*$contador) . "<br>";
    $contador++;
}
/*bucle DO WHILE. La condicion se evalua al final del bloque de instrucciones.se va a ejecutar siempre una vez.
 do{
    //bloque de instrucciones.
}while(condicion);*/

echo "<hr>";
echo "<h3>Local 1, es para menores, el resto de locales del 2 al 10 son para Mayores de edad</h3>";
$edad=17;
$local=1;
do{
    echo "Tienes acceso al local privado $local<br/>";
    $local++;
}while ($edad >=18 && $local<=10);







?>