<?php
/*Ejercicio 2: Escribir un script en PHP todos los número pares del 1 al 100*/

for ($i=1; $i <= 100; $i++) { 
    if($i%2==0){
        echo $i. ",";
    }
   

}
echo ".";

echo"<hr>";

for ($i=1; $i<=100 ; $i++) { 
    if($i%2==0){
    echo $i. "<br>";
    }
}


?>