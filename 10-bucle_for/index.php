<?php

//FOR
//suma todos los numeros del 1 al 100 y me muestre el resultado final.

$resultado=0;
for ($i=0; $i<=100 ; $i++){ 
    $resultado=$resultado + $i;
    
}
echo "<br>";
echo "<h1>El resultado es :$resultado</h1>";

echo "<hr>";


if(isset ($_GET['numero'])){  
    // el () antes de $_GET es un "casteo" para convertir el tipo en entero.          //Comprobar que nos llega un parametro numero que nos llega por GET
     $numero=(int)$_GET['numero'];   // si existe, para eso usamos el if. si existe le damos un valor
                                //el valor nos va a llegar por la URL. 
}else{ // en el caso de que no llegue número, lo daremos valor 1.-
    $numero=5;                  
}


//var_dump($numero); //para ver si existe la variable numero. No existe. Pues ahora es cuando 
                    // es cuando se utiliza el if(isset) comprueba si existe.

echo "<h1>Tabla de multiplicar del $numero con el metodo while</h1>";


$contador=1;
while ($contador <= 10) {
    echo "$numero x $contador =" . ($numero*$contador) . "<br>";
    $contador++;
}
echo "<hr/>";
echo "<h1>Tabla de multiplicar del $numero con el metodo for</h1>";


$numero=5;
$i=1;
for ($i=1; $i <=10; $i++) { 
    echo "$numero x $i =" . ($numero*$i) . "<br>";
    if ($i==5){
    break; 
    
    }
}
echo "A PARTIR DE 5 NO SE PUEDE AVANZAR EN LA TABLA DE MULTIPLICAR";


?>